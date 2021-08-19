<?php

class Version
{
    public function numberOfVersion(){
        return $this->NumberOfVersion;
    }
    public function __toString(){
        return "Current version 1";
    }
}
$v1 = new Version();
$ver1 -> NumberOfVersion = "1";
$ver2 -> NumberOfVersion = "2";
$ver3 -> NumberOfVersion = "3";
echo $ver1->NumberOfVersion;
echo $ver2->NumberOfVersion;
echo $ver3->NumberOfVersion;
echo "\n";
// $currentV1 = $v1->__toString();
// echo $currentV1;
// mong muon ket qua la: Current version 1

