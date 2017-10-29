<?php

trait AdditionalAssertions
{
    public function assertInternalFormatsEqual($expected, $actual)
    {
        foreach ($expected as $k => $block) {
            $this->assertTrue(round($expected[$k]['start'], 3) === round($actual[$k]['start'], 3), round($expected[$k]['start'], 3) . ' vs ' . round($actual[$k]['start'], 3));
            $this->assertTrue(round($expected[$k]['end'], 3) === round($actual[$k]['end'], 3),  round($expected[$k]['end'], 3) . ' vs ' . round($actual[$k]['end'], 3));

            foreach ($expected[$k]['lines'] as $line_k => $line) {
                $this->assertEquals($line, $actual[$k]['lines'][$line_k]);
            }
        }
    }
}
