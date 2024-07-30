<?php

use Core\Validator;

test('validates string', function(){   

    expect(Validator::string('hdfhgkdkgkldfg'))->toBeTrue();
    expect(Validator::string(''))->toBeFalse();
    expect(Validator::email('sainath@gmail.com'))->toBeTrue();
    expect(Validator::greaterThan(10,8))->toBeFalse();
})->only();