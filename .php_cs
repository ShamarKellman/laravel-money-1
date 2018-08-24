<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@DoctrineAnnotation' => true,
        '@PHP71Migration' => true,
        '@PHPUnit60Migration:risky' => true,
        'align_multiline_comment' => true,
        'array_indentation' => true,
        'array_syntax' => ['syntax' => 'short'],
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'comment_to_phpdoc' => true,
        'compact_nullable_typehint' => true,
        'date_time_immutable' => true,
        'escape_implicit_backslashes' => ['double_quoted' => true, 'heredoc_syntax' => true, 'single_quoted' => false],
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'final_internal_class' => true,
        'fully_qualified_strict_types' => true,
        'general_phpdoc_annotation_remove' => ['annotations' => ['author', 'package']],
        'heredoc_to_nowdoc' => true,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => ['syntax' => 'short'],
        'logical_operators' => true,
        'mb_str_functions' => true,
        'method_chaining_indentation' => true,
        'multiline_comment_opening_closing' => true,
        'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
        'native_function_invocation' => false,
        'no_alternative_syntax' => true,
        'no_binary_string' => true,
        'no_blank_lines_before_namespace' => false,
        'no_null_property_initialization' => false,
        'no_php4_constructor' => true,
        'no_short_echo_tag' => true,
        'no_superfluous_elseif' => true,
        'no_superfluous_phpdoc_tags' => false,
        'no_unreachable_default_argument_value' => true,
        'no_unset_on_property' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'not_operator_with_space' => false,
        'not_operator_with_successor_space' => false,
        'ordered_class_elements' => ['order' => ['use_trait', 'constant_public', 'constant_protected', 'constant_private', 'property_public', 'property_protected', 'property_private', 'construct', 'destruct', 'magic', 'phpunit', 'method_public', 'method_protected', 'method_private']],
        'ordered_imports' => ['imports_order' => null, 'sortAlgorithm' => 'alpha'],
        'php_unit_internal_class' => false,
        'php_unit_ordered_covers' => true,
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_strict' => false,
        'php_unit_test_annotation' => ['case' => 'camel', 'style' => 'prefix'],
        'php_unit_test_case_static_method_calls' => ['call_type' => 'static', 'methods' => []],
        'php_unit_test_class_requires_covers' => true,
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'phpdoc_order' => true,
        'phpdoc_to_return_type' => false,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'phpdoc_types_order' => ['null_adjustment'=> 'always_last', 'sort_algorithm' => 'alpha'],
        'return_assignment' => true,
        'semicolon_after_instruction' => true,
        'simplified_null_return' => true,
        'single_line_comment_style' => ['comment_types' => ['asterisk', 'hash']],
        'static_lambda' => false,
        'strict_comparison' => true,
        'strict_param' => false,
        'string_line_ending' => true
    ])
    ->setCacheFile(__DIR__.'/.php_cs.cache')
    ->setFinder($finder)
    ->setRiskyAllowed(true)
;
