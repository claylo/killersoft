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


#ifdef ZEND_ENGINE_2
zend_class_entry *ical_class_entry;
#endif


/* declarations of methods to be exported */




#endif
