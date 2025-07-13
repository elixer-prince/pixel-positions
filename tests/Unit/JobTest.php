<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Nette\Schema\Expect;
use PHPUnit\Framework\TestCase;

class JobTest extends TestCase
{
    public function belongsToAnEmployer() {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        Expect::that($job->employer->is($employer))->toBeTrue();
    }
}
