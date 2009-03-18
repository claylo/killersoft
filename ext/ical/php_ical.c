#include "php_ical.h"

/* many thanks for the fine example set by the Dom extension */

zend_class_entry *ical_component_class_entry;

zend_object_handlers ical_object_handlers;

static HashTable classes;

static HashTable ical_component_prop_handlers;

typedef int (*ical_read_t)(ical_object *obj, zval **retval TSRMLS_DC);
typedef int (*ical_write_t)(ical_object *obj, zval *newval TSRMLS_DC);

typedef struct _ical_prop_handler {
    ical_read_t read_func;
    ical_write_t write_func;
} ical_prop_handler;


/* PHP_MINIT_FUNCTION(ical);
PHP_MINFO_FUNCTION(ical);
*/

function_entry ical_functions[] = {
    {NULL, NULL, NULL}
};

static zend_object_handlers* ical_get_obj_handlers(TSRMLS_D) {
    return &ical_object_handlers;
}

/* {{{ icalcomponent_module_entry
 */
zend_module_entry ical_module_entry = {
    STANDARD_MODULE_HEADER,
    "ical",
    ical_functions,
    PHP_MINIT(ical),
    NULL,
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
    zend_class_entry ce;
    
    memcpy(&ical_object_handlers, zend_get_std_object_handlers(), sizeof(zend_object_handlers));
    
    zend_hash_init(&classes, 0, NULL, NULL, 1);

    REGISTER_ICAL_CLASS(ce, "ICalComponent", NULL, ical_component_class_functions, ical_component_class_entry);

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
