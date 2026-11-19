# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),  
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.4.7] - 2026-11-19

### Changed

- chore: support current PHPUnit versions (#15)
- Merge pull request #14 from marcel-breuer/changelog/v1.4.6
- docs(changelog): update for v1.4.6 [skip ci]

## [1.4.6] - 2026-11-15

### Changed

- Merge pull request #13 from marcel-breuer/ci/changelog-via-pr
- ci: open changelog updates as pull requests

## [1.2.0] - 2026-01-08

### Changed

- Re-introduced `declare_strict_types` for stricter type checking.
- Added `concat_space` rule to enforce consistent spacing in concatenation.
- Added `explicit_string_variable` rule to clarify variable parsing in strings.

## [1.1.0] - 2025-12-27

### Changed

- Updated Pint rule set to better align with modern PHP standards.
- Removed `declare_strict_types` to allow for more flexibility.
- Added `backtick_to_shell_exec` to enforce consistent shell command execution.

## [1.0.3] - 2025-04-25

### Added

- Integrated `composer pint` script for easier usage
- Updated README with example `pint.json` and usage instructions

## [1.0.2] - 2025-04-25

### Changed

- Removed PSR-4 autoloading and PHP class-based preset
- Migrated to JSON-based Pint configuration
- Cleaned up composer.json and removed Laravel-specific entries

## [1.0.1] - 2025-04-25

### Fixed

- Corrected package name in pint.json usage documentation
- Resolved issue with undefined array key when using the PHP class preset

## [1.0.0] - 2025-04-25

### Added

- Initial release of the Laravel Pint preset
- Includes opinionated Pint rules for Laravel and PHP projects
- Supports PHP 8.1+ and Laravel Pint 1.10+
