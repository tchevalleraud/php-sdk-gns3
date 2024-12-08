<?php
    class GNS3Test extends \PHPUnit\Framework\TestCase {

        public function testGNS3_instanceOf(){
            $gns3 = new \Tchevalleraud\GNS3\GNS3();
            $this->assertInstanceOf(\Tchevalleraud\GNS3\GNS3::class, $gns3);
        }

    }