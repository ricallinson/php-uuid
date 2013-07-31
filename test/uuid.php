<?php
use php_require\php_uuid\UUID;

/*
    Create a MockModule to load our module into for testing.
*/

if (!class_exists("MockModule")) {
    class MockModule {
        public $exports = array();
    }
}
$module = new MockModule();

/*
    Now we "require()" the file to test.
*/

require(__DIR__ . "/../index.php");

/*
    Now we test it.
*/

describe("php-uuid", function () {

    describe("uuid->generate()", function () {
        it("should return", function () {
            $uuid = new UUID();
            assert(strlen($uuid->generate(UUID::UUID_TIME, UUID::FMT_STRING)) === 36);
        });
    });
});
