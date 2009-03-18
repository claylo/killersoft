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

#ifndef PHP_ICAL_H
#define PHP_ICAL_H

#define PHP_ICAL_VERSION "0.0.1-dev"


/* Import configure options 
   when building outside of 
   the PHP source tree */
#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

/* Include PHP Standard Header */
#include "php.h"

#ifdef ZTS
#include "TSRM.h"
#endif

#include <libical/ical.h>

#ifdef PHP_WIN32
#define PHP_ICAL_API __declspec(dllexport)
#else
#define PHP_ICAL_API
#endif

extern zend_module_entry ical_module_entry;
#define phpext_ical_ptr &ical_module_entry

#define PHP_ICAL_EXPORT PHPAPI




typedef struct _ical_object {
	zend_object  std;
	void *ptr;
	icalcomponent *component;
	HashTable *prop_handler;
	zend_object_handle handle;
} ical_object;


#include "ical_ce.h"
#include "ical_fe.h"

zend_object_value ical_objects_new(zend_class_entry *class_type TSRMLS_DC);


#define REGISTER_ICAL_CLASS(ce, name, parent_ce, funcs, entry) \
INIT_CLASS_ENTRY(ce, name, funcs); \
ce.create_object = ical_objects_new; \
entry = zend_register_internal_class_ex(&ce, parent_ce, NULL TSRMLS_CC);

#define ICAL_GET_OBJ(__ptr, __id, __prtype, __intern) { \
	__intern = (ical_object *)zend_object_store_get_object(__id TSRMLS_CC); \
	if (__intern->ptr == NULL) { \
  		php_error_docref(NULL TSRMLS_CC, E_WARNING, "Couldn't fetch %s", __intern->std.ce->name);\
  		RETURN_NULL();\
  	} \
}

#define ICAL_NO_ARGS() \
	if (ZEND_NUM_ARGS() != 0) { \
		php_error_docref(NULL TSRMLS_CC, E_WARNING, "Expects exactly 0 parameters, %d given", ZEND_NUM_ARGS()); \
		return; \
	}


PHP_MINIT_FUNCTION(ical);
PHP_MINFO_FUNCTION(ical);

#endif /* PHP_ICAL_H */
