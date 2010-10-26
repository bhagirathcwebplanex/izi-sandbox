--TEST--
EDI_EDIFACT_MappingProvider test 02
--FILE--
<?php

require_once dirname(__FILE__) . '/../tests.inc.php';
require_once 'EDI/EDIFACT/MappingProvider.php';

try {
    $node = EDI_EDIFACT_MappingProvider::find('INVOIC');
    echo $node->asXml();
} catch (Exception $exc) {
    echo $exc->getMessage();
    exit(1);
}

?>
--EXPECT--
<?xml version="1.0" encoding="utf-8" standalone="yes"?>
<message>
    <defaults>
        <data_element id="0065" value="INVOIC"/>
        <data_element id="0052" value="D"/>
        <data_element id="0054" value="07A"/>
        <data_element id="0051" value="UN"/>
    </defaults>
    <segment id="UNH" maxrepeat="1" required="true"/>
    <segment id="BGM" maxrepeat="1" required="true"/>
    <segment id="DTM" maxrepeat="35" required="true"/>
    <segment id="PAI" maxrepeat="1"/>
    <segment id="ALI" maxrepeat="5"/>
    <segment id="IMD" maxrepeat="1"/>
    <segment id="FTX" maxrepeat="99"/>
    <segment id="LOC" maxrepeat="10"/>
    <segment id="GEI" maxrepeat="10"/>
    <segment id="DGS" maxrepeat="1"/>
    <segment id="GIR" maxrepeat="10"/>
    <group id="SG1" maxrepeat="99999">
        <segment id="RFF" maxrepeat="1" required="true"/>
        <segment id="DTM" maxrepeat="5"/>
        <segment id="GIR" maxrepeat="5"/>
        <segment id="LOC" maxrepeat="2"/>
        <segment id="MEA" maxrepeat="5"/>
        <segment id="QTY" maxrepeat="2"/>
        <segment id="FTX" maxrepeat="5"/>
        <segment id="MOA" maxrepeat="2"/>
        <segment id="RTE" maxrepeat="99"/>
    </group>
    <group id="SG2" maxrepeat="99">
        <segment id="NAD" maxrepeat="1" required="true"/>
        <segment id="LOC" maxrepeat="25"/>
        <segment id="FII" maxrepeat="5"/>
        <segment id="MOA" maxrepeat="99"/>
        <group id="SG3" maxrepeat="9999">
            <segment id="RFF" maxrepeat="1" required="true"/>
            <segment id="DTM" maxrepeat="5"/>
        </group>
        <group id="SG4" maxrepeat="5">
            <segment id="DOC" maxrepeat="1" required="true"/>
            <segment id="DTM" maxrepeat="5"/>
        </group>
        <group id="SG5" maxrepeat="5">
            <segment id="CTA" maxrepeat="1" required="true"/>
            <segment id="COM" maxrepeat="5"/>
        </group>
    </group>
    <group id="SG6" maxrepeat="5">
        <segment id="TAX" maxrepeat="1" required="true"/>
        <segment id="MOA" maxrepeat="1"/>
        <segment id="LOC" maxrepeat="5"/>
    </group>
    <group id="SG7" maxrepeat="99">
        <segment id="CUX" maxrepeat="1" required="true"/>
        <segment id="DTM" maxrepeat="5"/>
    </group>
    <group id="SG8" maxrepeat="10">
        <segment id="PYT" maxrepeat="1" required="true"/>
        <segment id="DTM" maxrepeat="5"/>
        <segment id="PCD" maxrepeat="1"/>
        <segment id="MOA" maxrepeat="1"/>
        <segment id="PAI" maxrepeat="1"/>
        <segment id="FII" maxrepeat="1"/>
    </group>
    <group id="SG9" maxrepeat="10">
        <segment id="TDT" maxrepeat="1" required="true"/>
        <segment id="TSR" maxrepeat="1"/>
        <group id="SG10" maxrepeat="10">
            <segment id="LOC" maxrepeat="1" required="true"/>
            <segment id="DTM" maxrepeat="5"/>
        </group>
        <group id="SG11" maxrepeat="9999">
            <segment id="RFF" maxrepeat="1" required="true"/>
            <segment id="DTM" maxrepeat="5"/>
        </group>
    </group>
    <group id="SG12" maxrepeat="5">
        <segment id="TOD" maxrepeat="1" required="true"/>
        <segment id="LOC" maxrepeat="2"/>
    </group>
    <group id="SG13" maxrepeat="99">
        <segment id="EQD" maxrepeat="1" required="true"/>
        <segment id="SEL" maxrepeat="9"/>
    </group>
    <group id="SG14" maxrepeat="1000">
        <segment id="PAC" maxrepeat="1" required="true"/>
        <segment id="MEA" maxrepeat="5"/>
        <segment id="EQD" maxrepeat="1"/>
        <group id="SG15" maxrepeat="5">
            <segment id="PCI" maxrepeat="1" required="true"/>
            <segment id="RFF" maxrepeat="1"/>
            <segment id="DTM" maxrepeat="5"/>
            <segment id="GIN" maxrepeat="5"/>
        </group>
    </group>
    <group id="SG16" maxrepeat="9999">
        <segment id="ALC" maxrepeat="1" required="true"/>
        <segment id="ALI" maxrepeat="5"/>
        <segment id="FTX" maxrepeat="1"/>
        <group id="SG17" maxrepeat="5">
            <segment id="RFF" maxrepeat="1" required="true"/>
            <segment id="DTM" maxrepeat="5"/>
        </group>
        <group id="SG18" maxrepeat="1">
            <segment id="QTY" maxrepeat="1" required="true"/>
            <segment id="RNG" maxrepeat="1"/>
        </group>
        <group id="SG19" maxrepeat="1">
            <segment id="PCD" maxrepeat="1" required="true"/>
            <segment id="RNG" maxrepeat="1"/>
        </group>
        <group id="SG20" maxrepeat="2">
            <segment id="MOA" maxrepeat="1" required="true"/>
            <segment id="RNG" maxrepeat="1"/>
            <segment id="CUX" maxrepeat="1"/>
            <segment id="DTM" maxrepeat="1"/>
        </group>
        <group id="SG21" maxrepeat="1">
            <segment id="RTE" maxrepeat="1" required="true"/>
            <segment id="RNG" maxrepeat="1"/>
        </group>
        <group id="SG22" maxrepeat="5">
            <segment id="TAX" maxrepeat="1" required="true"/>
            <segment id="MOA" maxrepeat="1"/>
        </group>
    </group>
    <group id="SG23" maxrepeat="100">
        <segment id="RCS" maxrepeat="1" required="true"/>
        <segment id="RFF" maxrepeat="5"/>
        <segment id="DTM" maxrepeat="5"/>
        <segment id="FTX" maxrepeat="5"/>
    </group>
    <group id="SG24" maxrepeat="1">
        <segment id="AJT" maxrepeat="1" required="true"/>
        <segment id="FTX" maxrepeat="5"/>
    </group>
    <group id="SG25" maxrepeat="1">
        <segment id="INP" maxrepeat="1" required="true"/>
        <segment id="FTX" maxrepeat="5"/>
    </group>
    <group id="SG26" maxrepeat="9999999">
        <segment id="LIN" maxrepeat="1" required="true"/>
        <segment id="PIA" maxrepeat="25"/>
        <segment id="PGI" maxrepeat="99"/>
        <segment id="IMD" maxrepeat="99"/>
        <segment id="MEA" maxrepeat="5"/>
        <segment id="QTY" maxrepeat="5"/>
        <segment id="PCD" maxrepeat="1"/>
        <segment id="ALI" maxrepeat="5"/>
        <segment id="DTM" maxrepeat="35"/>
        <segment id="GIN" maxrepeat="1000"/>
        <segment id="GIR" maxrepeat="1000"/>
        <segment id="QVR" maxrepeat="1"/>
        <segment id="EQD" maxrepeat="1"/>
        <segment id="FTX" maxrepeat="99"/>
        <segment id="DGS" maxrepeat="1"/>
        <group id="SG27" maxrepeat="99">
            <segment id="MOA" maxrepeat="1" required="true"/>
            <segment id="CUX" maxrepeat="1"/>
        </group>
        <group id="SG28" maxrepeat="10">
            <segment id="PYT" maxrepeat="1" required="true"/>
            <segment id="DTM" maxrepeat="5"/>
            <segment id="PCD" maxrepeat="99"/>
            <segment id="MOA" maxrepeat="1"/>
        </group>
        <group id="SG29" maxrepeat="25">
            <segment id="PRI" maxrepeat="1" required="true"/>
            <segment id="CUX" maxrepeat="1"/>
            <segment id="APR" maxrepeat="1"/>
            <segment id="RNG" maxrepeat="1"/>
            <segment id="DTM" maxrepeat="5"/>
        </group>
        <group id="SG30" maxrepeat="10">
            <segment id="RFF" maxrepeat="1" required="true"/>
            <segment id="DTM" maxrepeat="5"/>
        </group>
        <group id="SG31" maxrepeat="10">
            <segment id="PAC" maxrepeat="1" required="true"/>
            <segment id="MEA" maxrepeat="10"/>
            <segment id="EQD" maxrepeat="1"/>
            <group id="SG32" maxrepeat="10">
                <segment id="PCI" maxrepeat="1" required="true"/>
                <segment id="RFF" maxrepeat="1"/>
                <segment id="DTM" maxrepeat="5"/>
                <segment id="GIN" maxrepeat="10"/>
            </group>
        </group>
        <group id="SG33" maxrepeat="9999">
            <segment id="LOC" maxrepeat="1" required="true"/>
            <segment id="QTY" maxrepeat="100"/>
            <segment id="DTM" maxrepeat="5"/>
        </group>
        <group id="SG34" maxrepeat="99">
            <segment id="TAX" maxrepeat="1" required="true"/>
            <segment id="MOA" maxrepeat="2"/>
            <segment id="LOC" maxrepeat="5"/>
        </group>
        <group id="SG35" maxrepeat="99">
            <segment id="NAD" maxrepeat="1" required="true"/>
            <segment id="LOC" maxrepeat="5"/>
            <segment id="FII" maxrepeat="5"/>
            <group id="SG36" maxrepeat="5">
                <segment id="RFF" maxrepeat="1" required="true"/>
                <segment id="DTM" maxrepeat="5"/>
            </group>
            <group id="SG37" maxrepeat="5">
                <segment id="DOC" maxrepeat="1" required="true"/>
                <segment id="DTM" maxrepeat="5"/>
            </group>
            <group id="SG38" maxrepeat="5">
                <segment id="CTA" maxrepeat="1" required="true"/>
                <segment id="COM" maxrepeat="5"/>
            </group>
        </group>
        <group id="SG39" maxrepeat="30">
            <segment id="ALC" maxrepeat="1" required="true"/>
            <segment id="ALI" maxrepeat="5"/>
            <segment id="DTM" maxrepeat="5"/>
            <segment id="FTX" maxrepeat="1"/>
            <group id="SG40" maxrepeat="1">
                <segment id="QTY" maxrepeat="1" required="true"/>
                <segment id="RNG" maxrepeat="1"/>
            </group>
            <group id="SG41" maxrepeat="1">
                <segment id="PCD" maxrepeat="1" required="true"/>
                <segment id="RNG" maxrepeat="1"/>
            </group>
            <group id="SG42" maxrepeat="2">
                <segment id="MOA" maxrepeat="1" required="true"/>
                <segment id="RNG" maxrepeat="1"/>
                <segment id="CUX" maxrepeat="1"/>
                <segment id="DTM" maxrepeat="1"/>
            </group>
            <group id="SG43" maxrepeat="1">
                <segment id="RTE" maxrepeat="1" required="true"/>
                <segment id="RNG" maxrepeat="1"/>
            </group>
            <group id="SG44" maxrepeat="5">
                <segment id="TAX" maxrepeat="1" required="true"/>
                <segment id="MOA" maxrepeat="2"/>
            </group>
        </group>
        <group id="SG45" maxrepeat="10">
            <segment id="TDT" maxrepeat="1" required="true"/>
            <group id="SG46" maxrepeat="10">
                <segment id="LOC" maxrepeat="1" required="true"/>
                <segment id="DTM" maxrepeat="5"/>
            </group>
        </group>
        <group id="SG47" maxrepeat="5">
            <segment id="TOD" maxrepeat="1" required="true"/>
            <segment id="LOC" maxrepeat="2"/>
        </group>
        <group id="SG48" maxrepeat="100">
            <segment id="RCS" maxrepeat="1" required="true"/>
            <segment id="RFF" maxrepeat="5"/>
            <segment id="DTM" maxrepeat="5"/>
            <segment id="FTX" maxrepeat="5"/>
        </group>
        <group id="SG49" maxrepeat="999">
            <segment id="GEI" maxrepeat="1" required="true"/>
            <segment id="RFF" maxrepeat="9"/>
            <segment id="IMD" maxrepeat="99"/>
            <segment id="DTM" maxrepeat="5"/>
            <segment id="GIR" maxrepeat="5"/>
            <segment id="LOC" maxrepeat="2"/>
            <segment id="MEA" maxrepeat="5"/>
            <segment id="QTY" maxrepeat="9"/>
            <segment id="FTX" maxrepeat="5"/>
            <segment id="MOA" maxrepeat="2"/>
        </group>
    </group>
    <segment id="UNS" maxrepeat="1" required="true"/>
    <segment id="CNT" maxrepeat="10"/>
    <group id="SG50" maxrepeat="100" required="true">
        <segment id="MOA" maxrepeat="1" required="true"/>
        <group id="SG51" maxrepeat="1">
            <segment id="RFF" maxrepeat="1" required="true"/>
            <segment id="DTM" maxrepeat="5"/>
        </group>
    </group>
    <group id="SG52" maxrepeat="10">
        <segment id="TAX" maxrepeat="1" required="true"/>
        <segment id="MOA" maxrepeat="9"/>
    </group>
    <group id="SG53" maxrepeat="15">
        <segment id="ALC" maxrepeat="1" required="true"/>
        <segment id="ALI" maxrepeat="1"/>
        <segment id="MOA" maxrepeat="2"/>
        <segment id="FTX" maxrepeat="1"/>
    </group>
    <segment id="UNT" maxrepeat="1" required="true"/>
</message>