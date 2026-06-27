# Skill: Review Code

## Purpose

Review repository changes for correctness, scope, security, and validation risk.

## When to Use

Use for code review, pre-merge review, or final self-review of a change set.

## When Not to Use

Do not use to perform implementation work unless review findings require a requested fix.

## Required Context

- `AGENTS.md`
- Relevant changed files
- Relevant tests and configuration
- Task requirements or acceptance criteria

## Relevant Project Areas

- Changed repository files only, plus directly related tests or configuration

## Procedure

1. Inspect the diff before reading unrelated files.
2. Prioritize bugs, behavioral regressions, security issues, broken validation, and missing tests.
3. Verify claims against repository configuration and tests.
4. Distinguish confirmed issues from assumptions.
5. Keep findings concise and actionable.

## Validation

- Run or review task-relevant validation commands.
- Run `git diff --check` for changed text files when appropriate.

## Expected Output

List findings first by severity with file references. If no issues are found, state that and mention residual test gaps or risks.

## Constraints

- Do not expand review scope without a task-relevant reason.
- Do not report style preferences as defects unless they conflict with repository rules.

## Completion Criteria

Findings are evidence-based, scoped to the change, and include validation status or gaps.
