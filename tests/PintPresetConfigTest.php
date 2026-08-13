<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PintPresetConfigTest extends TestCase
{
    public function test_composer_package_uses_current_github_owner(): void
    {
        $content = file_get_contents(__DIR__.'/../composer.json');

        $this->assertNotFalse($content);

        $composer = json_decode($content, true);

        $this->assertIsArray($composer);
        $this->assertSame('marcel-breuer/pint-preset', $composer['name'] ?? null);
    }

    public function test_pint_config_file_exists(): void
    {
        $this->assertFileExists(__DIR__.'/../src/pint.json');
    }

    public function test_pint_config_contains_valid_json(): void
    {
        $content = file_get_contents(__DIR__.'/../src/pint.json');

        $this->assertNotFalse($content);

        $decoded = json_decode($content, true);

        $this->assertIsArray($decoded);
        $this->assertSame(JSON_ERROR_NONE, json_last_error(), json_last_error_msg());
    }

    public function test_pint_config_uses_laravel_preset(): void
    {
        $config = json_decode((string) file_get_contents(__DIR__.'/../src/pint.json'), true);

        $this->assertSame('laravel', $config['preset'] ?? null);
    }

    public function test_expected_rules_are_present(): void
    {
        $config = json_decode((string) file_get_contents(__DIR__.'/../src/pint.json'), true);
        $rules = $config['rules'] ?? [];

        $this->assertArrayHasKey('declare_strict_types', $rules);
        $this->assertTrue($rules['declare_strict_types']);

        $this->assertArrayHasKey('concat_space', $rules);
        $this->assertSame(['spacing' => 'one'], $rules['concat_space']);

        $this->assertArrayHasKey('explicit_string_variable', $rules);
        $this->assertTrue($rules['explicit_string_variable']);

        $this->assertArrayHasKey('Pint/laravel_blade', $rules);
        $this->assertTrue($rules['Pint/laravel_blade']);
    }
}
