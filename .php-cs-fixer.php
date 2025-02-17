<?php
/*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/#version:3.41.1|configurator
 * you can change this configuration by importing this file.
 */
$config = new PhpCsFixer\Config();
return $config
    ->setRiskyAllowed(true)
    ->setIndent("\t")
    ->setRules([
        '@PER-CS2.0:risky' => true,
        '@PER-CS2.0' => true,
        '@DoctrineAnnotation' => true,
        '@PHPUnit100Migration:risky' => true,
        '@PHP74Migration' => true,
        '@PHP74Migration:risky' => true,
        'align_multiline_comment' => true,
        'array_indentation' => true,
        'array_push' => true,
        'array_syntax' => true,
        'assign_null_coalescing_to_coalesce_equal' => true,
        'attribute_empty_parentheses' => true,
        'backtick_to_shell_exec' => true,
        'binary_operator_spaces' => ['default' => 'single_space','operators' => ['=' => 'at_least_single_space','=>' => 'align_single_space_minimal']],
        'blank_line_after_namespace' => false,
        'blank_line_after_opening_tag' => false,
        'blank_line_before_statement' => ['statements' => ['declare','return','throw','try']],
        'blank_lines_before_namespace' => false,
        'braces_position' => ['classes_opening_brace' => 'same_line','functions_opening_brace' => 'same_line'],
        'cast_spaces' => ['space' => 'none'],
        'class_attributes_separation' => ['elements' => ['method' => 'one']],
        'class_reference_name_casing' => true,
        'clean_namespace' => true,
        'combine_nested_dirname' => true,
        'comment_to_phpdoc' => true,
        'concat_space' => ['spacing' => 'one'],
        'date_time_create_from_format_call' => true,
        'declare_parentheses' => true,
        'declare_strict_types' => false,
        'dir_constant' => true,
        'echo_tag_syntax' => true,
        'empty_loop_body' => true,
        'empty_loop_condition' => true,
        'ereg_to_preg' => true,
        'error_suppression' => true,
        'escape_implicit_backslashes' => true,
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'fopen_flag_order' => true,
        'fopen_flags' => ['b_mode' => false],
        'function_declaration' => ['closure_function_spacing' => 'none'],
        'function_to_constant' => true,
        'general_phpdoc_annotation_remove' => true,
        'general_phpdoc_tag_rename' => true,
        'heredoc_indentation' => true,
        'heredoc_to_nowdoc' => true,
        'implode_call' => true,
        'increment_style' => ['style' => 'post'],
        'integer_literal_case' => true,
        'is_null' => true,
        'lambda_not_used_import' => true,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => true,
        'logical_operators' => true,
        'long_to_shorthand_operator' => true,
        'magic_constant_casing' => true,
        'magic_method_casing' => true,
        'method_chaining_indentation' => true,
        'modernize_types_casting' => true,
        'multiline_comment_opening_closing' => true,
        'multiline_whitespace_before_semicolons' => true,
        'native_function_casing' => true,
        'native_type_declaration_casing' => true,
        'no_alias_functions' => true,
        'no_alias_language_construct_call' => true,
        'no_alternative_syntax' => true,
        'no_binary_string' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => true,
        'no_homoglyph_names' => true,
        'no_leading_namespace_whitespace' => true,
        'no_mixed_echo_print' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_null_property_initialization' => true,
        'no_php4_constructor' => true,
        'no_short_bool_cast' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_spaces_around_offset' => true,
        'no_trailing_comma_in_singleline' => true,
        'no_unneeded_braces' => true,
        'no_unneeded_control_parentheses' => true,
        'no_unneeded_final_method' => true,
        'no_unneeded_import_alias' => true,
        'no_unset_cast' => true,
        'no_unset_on_property' => true,
        'no_unused_imports' => true,
        'no_useless_nullsafe_operator' => true,
        'no_useless_return' => true,
        'no_useless_sprintf' => true,
        'no_whitespace_before_comma_in_array' => true,
        'non_printable_character' => true,
        'normalize_index_brace' => true,
        'nullable_type_declaration' => true,
        'nullable_type_declaration_for_default_null_value' => true,
        'object_operator_without_whitespace' => true,
        'operator_linebreak' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'ordered_interfaces' => true,
        'ordered_traits' => true,
        'ordered_types' => true,
        'php_unit_construct' => true,
        'php_unit_data_provider_name' => true,
        'php_unit_data_provider_return_type' => true,
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_strict' => true,
        'php_unit_test_annotation' => true,
        'php_unit_test_case_static_method_calls' => true,
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'phpdoc_align' => true,
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_indent' => true,
        'phpdoc_inline_tag_normalizer' => true,
        'phpdoc_line_span' => true,
        'phpdoc_no_access' => true,
        'phpdoc_no_alias_tag' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_order' => true,
        'phpdoc_order_by_value' => true,
        'phpdoc_param_order' => true,
        'phpdoc_return_self_reference' => true,
        'phpdoc_scalar' => true,
        'phpdoc_separation' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_tag_casing' => true,
        'phpdoc_tag_type' => true,
        'phpdoc_to_comment' => true,
        'phpdoc_trim' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_types' => true,
        'phpdoc_types_order' => ['null_adjustment' => 'always_last'],
        'phpdoc_var_annotation_correct_order' => true,
        'phpdoc_var_without_name' => true,
        'pow_to_exponentiation' => true,
        'random_api_migration' => true,
        'regular_callable_call' => true,
        'return_assignment' => true,
        'return_to_yield_from' => true,
        'self_accessor' => true,
        'self_static_accessor' => true,
        'semicolon_after_instruction' => true,
        'set_type_to_cast' => true,
        'simple_to_complex_string_variable' => true,
        'simplified_if_return' => true,
        'single_line_comment_style' => true,
        'single_line_throw' => true,
        'single_space_around_construct' => true,
        'space_after_semicolon' => true,
        'standardize_increment' => true,
        'standardize_not_equals' => true,
        'string_length_to_empty' => true,
        'string_line_ending' => true,
        'switch_continue_to_break' => true,
        'ternary_to_elvis_operator' => true,
        'trailing_comma_in_multiline' => false,
        'trim_array_spaces' => true,
        'type_declaration_spaces' => true,
        'types_spaces' => true,
        'unary_operator_spaces' => true,
        'use_arrow_functions' => true,
        'void_return' => false,
        'whitespace_after_comma_in_array' => true,
        'yield_from_array_to_yields' => true,
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        ->in(__DIR__ . '/upload/')
         ->exclude([
             __DIR__ . '/upload/system/storage/vendor/',
         ])
        // ->append([
        //     'file-to-include',
        // ])
    )
;
