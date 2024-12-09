<?php
    use PHPUnit\Framework\Attributes\CoversClass;

    #[CoversClass(\Tchevalleraud\GNS3\GNS3::class)]
    class GNS3Test extends \PHPUnit\Framework\TestCase {

        public function testGNS3_instanceOf(){
            $gns3 = new \Tchevalleraud\GNS3\GNS3("127.0.0.1");
            $this->assertInstanceOf(\Tchevalleraud\GNS3\GNS3::class, $gns3);
        }

    }