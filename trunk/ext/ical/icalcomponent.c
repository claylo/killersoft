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


#endif /* HAVE_ICAL */