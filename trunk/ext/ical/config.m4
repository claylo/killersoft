dnl $Id$
dnl config.m4 for extension php_ical
dnl don't forget to call PHP_EXTENSION(php_ical)

PHP_ARG_WITH(ical, for iCal support,
 [  --with-ical[=DIR]      Include iCal support])


if test "$PHP_ICAL" != "no"; then

	ifdef([AC_PROG_EGREP], [
		AC_PROG_EGREP
		], [
		AC_CHECK_PROG(EGREP, egrep, egrep)
		])

	ifdef([AC_PROG_SED], [
		AC_PROG_SED
		], [
		ifdef([LT_AC_PROG_SED], [
			LT_AC_PROG_SED
			], [
			AC_CHECK_PROG(SED, sed, sed)
			])
		])

	if test -r "$PHP_ICAL/include/libical/ical.h"; then
		PHP_LIBICAL_DIR="$PHP_ICAL"
	else
		AC_MSG_CHECKING(for libical in default path)
		for i in /usr /usr/local; do
			if test -r "$i/include/libical/ical.h"; then
				PHP_LIBICAL_DIR=$i
				AC_MSG_RESULT(found in $i)
			fi
		done
	fi

	AC_CHECK_HEADER([$PHP_LIBICAL_DIR/include/libical/ical.h], [], AC_MSG_ERROR('include/libical/ical.h' header not found))

	ICAL_VERSION=`$EGREP "define ICAL_VERSION .(.*)."  $PHP_LIBICAL_DIR/include/libical/ical.h | $SED -e 's/[^0-9]//g'`
	if [ $ICAL_VERSION -lt 43 ]; then
		AC_MSG_ERROR([libical version greater or equal to 0.43 is required])
	else
		AC_MSG_RESULT([libical 0.43 or greater...found])
	fi


	PHP_ADD_INCLUDE($PHP_LIBICAL_DIR/include)

    PHP_ADD_LIBRARY_WITH_PATH(ical, $PHP_LIBICAL_DIR/$PHP_LIBDIR, ICAL_SHARED_LIBADD)
    AC_DEFINE(HAVE_ICAL,1,[ ])

	PHP_SUBST(ICAL_SHARED_LIBADD)

   	PHP_NEW_EXTENSION(ical, [icalcomponent.c], 
   	                         $ext_shared)
fi
