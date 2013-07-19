<?php

/*
    Create a MockModule to load our module into for testing.
*/

class MockModule {
    public $exports = array();
}
$module = new MockModule();

/*
	"require()" the file to test.
*/

require(__DIR__ . "/../lib/Basic.php");

describe("Basic", function () {

    it("should return 'Blue'", function () {
    	$basic = new Basic();
    	assert($basic->colour === "Blue");
    });

    it("should return 'Brilliant'", function () {
    	$basic = new Basic();
    	assert($basic->disposition === "Brilliant");
    });
});
