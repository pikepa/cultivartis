<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

// Uses the given test case in the "Feature" folder recursively
uses(TestCase::class)->in('Feature','Unit');

// Uses the given trait in the "Unit" folder recursively
uses(RefreshDatabase::class)->in('Feature', 'Unit');
