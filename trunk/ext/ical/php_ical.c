#include "php_ical.h"

PHP_MINIT_FUNCTION(ical);
PHP_MINFO_FUNCTION(ical);

function_entry ical_functions[] = {
    {NULL, NULL, NULL}
};

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
    /* class_init_ICalComponent(); */

    PHP_MINIT(ICalComponent)(INIT_FUNC_ARGS_PASSTHRU);

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
