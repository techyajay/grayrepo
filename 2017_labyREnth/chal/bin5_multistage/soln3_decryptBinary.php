<?php
$enc = "9947204F20D89F9A9B755D743A442401CCCCCC7541DC7B34240FCCCCCC753D996AD02475CCCCCC756BC795C445893C2460CCCCCC759F9241974589382453CCCCCC75FF449652458930245ECCCCCC755E3D62834734244ACCCCCC4781C4FF3A45892047CD47044589344CF4CCB8C7AA5C4185CD8A4CF5CCB93BA6C8A4CCFCCCCCA4CC8CCCCCA6CC331B471475CCDCCCCCFF0C47373F679D478134471A9F2442CDCCCC4F08C4490C4789C4B9C933BCC427CF33BCC8A6CCA6CC339930A41CCBCCCC473C3399389A33993CA6CCA6CC9F3399209392FF0C974729910EC8CC000000009947204F20D8458134A86DFCCCCCCC4589304789309F9A9B478CC0478CD8471C4589204796DC47DE45993C4917C34846CCCCCC478FF04788D4B4490CB8B34780D4C041F0D4CF0745B130FF3A46CD480CB8DA0D02C1F0ADC3720CB0CF4F24EC8DCF3C46CD480CB926478130478BECFF33CF0F458938F5B5D4BA8FAAC3D388CCCC47D874FF0CCF1F46C64805B8D6C3D3CC0D04C14C35ADC37205B0CF4F25EC8ECF0D46C64805B925CF0AF58934B8ED4789308BF7B4D4478938BE0A47993CF79920C349913333339392FF0C974729910F479930478EE841C8B4C37BC0D4478ED0939241C84447C8D4CF0F974729910F00009947204F20C49F47154599304917B9C5FF0C974729910EC8CC4F37CDB9C5470F974729910EC8CC41C85645893447CC490CB9EA9B33B9C4418732240D33333333B9C44799304187334734247D333333CF3447893445F4470B93974729910EC8CC9947204F28344D2058CCCCCC9F47150B88E8DCA1D6CCCC74DDCCCCCC4590E8C0FF050B88E8D8CCCCCCCCF71C0B88E8D407B2D5CA9AC38E0E0B88E8ECCCCCCCCC0B88E8E8A14112C50B88E8E4CCCCCCCC0B88E8E04EA415710B88E8FCCCCCCCCC0B88E8F81146D8CC0B88E8F4CCCCCCCC0B88E8F0A14112C50B88E88CCCCCCCCC0B88E8884EA415710B88E884CCCCCCCC0B88E8801146D8CC0B88E89CCCCCCCCC0B88E898116902E50B88E894CCCCCCCC0B88E8902E0BF9CC0B88E8ACCCCCCCCC0B88E8A82BC89BCC0B88E8A4CCCCCCCC0B88E8A06ED568D90B88E8BCCCCCCCCC0B88E8B89329BFA10B88E8B4CCCCCCCC0B88E8B02E0BF9CC0B48E84CCCCCCCCCCCCCCC0B48E848CCCCCC050040CC0B48E844CCCCCCCCCCCCCC0B48E840CCCCCC050040CC0B48E85CCCCCCCCCCCCCCC0B48E858CCCCCCA14112C50B48E854CCCCCCCCCCCCCC4588E8C09B4F36DDB8C5FF0C9392974729910FFF3A490CB8BBAA5C46C8D2480CB8A2E08CC37214B9C8FF3327F04F37CDB9C8473727FF4789C447F0544933B9E5A4CCDCCCCC418732471C24C03233334799C4418733A4CCDCCCCC47342436313333CF344789C445F054FF0CF7B038D4B9D1F78838D0B9DB4790E8D84184CD8AF7B8E8DCBE5A470D9392974729910FFF059392470D974729910F0000";
$enc = hex2bin($enc);
$out = "";
for ($i=0; $i<strlen($enc); $i++){
	$cur = ord($enc[$i]);
	$out .= chr($cur ^ 0xcc);
}
file_put_contents("level3.bin", $out);
?>