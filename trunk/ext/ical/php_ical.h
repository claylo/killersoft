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

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include "php.h"
#include "php_ini.h"

#include "zend.h"
#include "zend_API.h"
#include "zend_execute.h"
#include "zend_compile.h"
#include "zend_extensions.h"

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

PHP_MINIT_FUNCTION(ical);
PHP_RINIT_FUNCTION(ical);
PHP_MSHUTDOWN_FUNCTION(ical);
PHP_RSHUTDOWN_FUNCTION(ical);
PHP_MINFO_FUNCTION(ical);

#ifdef ZEND_ENGINE_2
zend_class_entry *ical_class_entry;
#endif


/* declarations of methods to be exported */
PHP_METHOD(ICalComponent, __constructor);



#endif
