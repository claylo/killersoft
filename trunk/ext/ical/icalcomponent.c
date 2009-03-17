/*
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.0 of the PHP license,       |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_0.txt.                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
   | Authors: Clay Loveless <clay@php.net>                                |
   +----------------------------------------------------------------------+
*/

/* $Id$ */ 

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include "php.h"
#include "php_ical.h"
#include "ext/standard/info.h"

#include "zend_compile.h"
#include "zend_interfaces.h"
#include "zend_exceptions.h"

#include "fopen_wrappers.h"
#include "ext/standard/basic_functions.h"
#include "ext/standard/php_filestat.h"
#include "php_streams.h"

#if HAVE_ICAL


/* {{{ arginfo */
ZEND_BEGIN_ARG_INFO(arginfo__construct, 0)
	ZEND_ARG_INFO(0, path)  /* parameter name */
ZEND_END_ARG_INFO();
    
/* }}} */


/*
* class ICalComponent
*
*/
/* static zend_object handlers icalcomponent_handlers; */

static zend_class_entry *icalcomponent_ce;

typedef struct _icalcomponent_object {
    zend_object std;
} icalcomponent_object;



/* {{{ icalcomponent_functions[] */
function_entry icalcomponent_functions[] = {
    { NULL, NULL, NULL }
};
/* }}} */

PHP_METHOD(ICalComponent, __construct)
{
    zval *object = getThis();
    icalcomponent_object *intern;
    
    /* intern = (icalcomponent_object*)zend_object_store_get_object(object TSRML_CC); */
}

static zend_function_entry ICalComponent_methods[] = {
    PHP_ME(ICalComponent, __construct, arginfo__construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
};

static void class_init_ICalComponent(void)
{
    zend_class_entry ce;

    INIT_CLASS_ENTRY(ce, "ICalComponent", ICalComponent_methods);
    icalcomponent_ce = zend_register_internal_class(&ce);
}

/* {{{ icalcomponent_module_entry
 */
zend_module_entry ical_module_entry = {
    STANDARD_MODULE_HEADER,
    "ical",
    icalcomponent_functions,
    PHP_MINIT(ical),
    PHP_MSHUTDOWN(ical),
    NULL,
    NULL,
    PHP_MINFO(ical),
    PHP_ICAL_VERSION,
    STANDARD_MODULE_PROPERTIES
};
/* }}} */

#ifdef COMPILE_DL_ICAL
ZEND_GET_MODULE(ical)
#endif

/* {{{ PHP_MINIT_FUNCTION */
PHP_MINIT_FUNCTION(ical)
{
    class_init_ICalComponent();

    /* add your stuff here */

    return SUCCESS;
}
/* }}} */

/* {{{ PHP_MSHUTDOWN_FUNCTION */
PHP_MSHUTDOWN_FUNCTION(ical)
{

    /* add your stuff here */

    return SUCCESS;
}
/* }}} */

/* {{{ PHP_MINFO_FUNCTION */
PHP_MINFO_FUNCTION(ical)
{
    php_info_print_table_start();
    {
        php_info_print_table_row(2, "ICal support", "enabled");
        php_info_print_table_row(2, "Extension version", PHP_ICAL_VERSION);
        php_info_print_table_row(2, "libical version", ICAL_VERSION);
    }
    php_info_print_table_end();
}
/* }}} */

#endif /* HAVE_ICAL */