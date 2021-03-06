<?php
//sous-function
function getcalendar($promo)
{
    // récupération des calendrier
    if ($promo != null) {
        //test d'éxistance de fichier .ics en local sur le serveur et test de connexion avec le serveur de l'UBS.
        $fp = @fsockopen("planning.univ-ubs.fr", 80, $errno, $errstr, 30);

        if ((file_exists("ics/$promo.ics") && ((date("F d Y H i", filemtime("ics/$promo.ics")) == date("F d Y H i")))) || (file_exists("ics/$promo.ics") && !$fp)) {
            $calendrier = file_get_contents("ics/$promo.ics");
        } else {
            //planning INFO
            if ($promo == "INFO1A1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214628e9ee67d520db5e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f1049521e5a8e68029dc8c2973627c2eb073b470ee97407c72c318d3f4109b6629391');
            } elseif ($promo == "INFO1A2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc387320021444b2068d37814033e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f1049521e5a8e68029dc8c2973627c2eb073b470ee97407c72c318d3f4109b6629391');
            } elseif ($promo == "INFO1B1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214e3b4fdf609d53024e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f1049521e5a8e68029dc8c2973627c2eb073b470ee97407c72c318d3f4109b6629391');
            } elseif ($promo == "INFO1B2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214e7816c0755e34543e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f1049521e5a8e68029dc8c2973627c2eb073b470ee97407c72c318d3f4109b6629391');
            } elseif ($promo == "INFO1C1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc387320021473110dcf0fad1631e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f1049521e5a8e68029dc8c2973627c2eb073b470ee97407c72c318d3f4109b6629391');
            } elseif ($promo == "INFO1C2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002148ac4e83c0ad230abe0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f1049521e5a8e68029dc8c2973627c2eb073b470ee97407c72c318d3f4109b6629391');
            } elseif ($promo == "INFO1D1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214d5d9f8710563f588e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f1049521e5a8e68029dc8c2973627c2eb073b470ee97407c72c318d3f4109b6629391');
            } elseif ($promo == "INFO1D2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214c281cf3d512a92b6e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f1049521e5a8e68029dc8c2973627c2eb073b3ed16e4ed8dfec978d3f4109b6629391');
            } elseif ($promo == "INFO2A1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002140684f27d200af967e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152b71afa816f3244e10b0fe1de1a6826fac2973627c2eb073b7d67a8d3d7529c488d3f4109b6629391');
            } elseif ($promo == "INFO2A2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214fa1b59eb843d4b74e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152b71afa816f3244e10b0fe1de1a6826fac2973627c2eb073b41b114e94beae6fd8d3f4109b6629391');
            } elseif ($promo == "INFO2B1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002140c58e1ebb26d9256e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152b71afa816f3244e10b0fe1de1a6826fac2973627c2eb073b41b114e94beae6fd8d3f4109b6629391');
            } elseif ($promo == "INFO2B2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc387320021424d4a82d60d96e19e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e861527a3ef22c78080a024b2c2a9e21a084f7c2973627c2eb073b41b114e94beae6fd8d3f4109b6629391');
            } elseif ($promo == "INFO2C1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214d1a70d2981c233ffe0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152b71afa816f3244e10b0fe1de1a6826fac2973627c2eb073bc6ba595ea089297d8d3f4109b6629391');
            } elseif ($promo == "INFO2C2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002145adfee73768645fce0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b2fc65f66ad58a8f38d3f4109b6629391');
            } elseif ($promo == "INFO2D1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002141882cdcc4853ac78e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152b71afa816f3244e10b0fe1de1a6826fac2973627c2eb073b8f877ce5c4fd7da98d3f4109b6629391');
            } elseif ($promo == "INFO2D2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214c6b88e35ecb85deae0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104970d3221b992403bec2973627c2eb073b227604b07387181d8d3f4109b6629391');
            } //planning STID
            elseif ($promo == "STID1A1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002145da68ee7d4257b29e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "STID1A2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214b8ac04389650e78ae0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } elseif ($promo == "STID1B1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc387320021483c4463655706235e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b4891ad86ad6ff2588d3f4109b6629391');
            } elseif ($promo == "STID1B2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002149788dc11087ed4d9e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "STID1C1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214ce0cccd402da1eb9e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "STID1C2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002145ada2d6f3881e90ce0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "STID1D1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214360f760adfbc4532e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b66222c8f246217518d3f4109b6629391');
            } elseif ($promo == "STID1D2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214f9d8178d7226cbb6e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "STID2A1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc387320021482c99d1b8992f943e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "STID2A2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214faa72bb69efce0e5e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "STID2B1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002149707a6deed1a5036e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "STID2B2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214bc7f4043bcc092cce0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "STID2C1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214b98dfdf1734b91c4e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "STID2C2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214176c7313597420a1e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f10494dd6499be9816867c2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "STID2D1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002149b4a7395d720c451324cfcf2e9e6b4356213d7c347ee7c2df43b49ed91b3cccdb0db0d7caf18783a68fa32040f5bd2dd8b9c9c60da67e1cdd9834081c5882554cd59d94de6c8d1a4');
            } elseif ($promo == "STID2D2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214754509b38d4d7efe324cfcf2e9e6b4356213d7c347ee7c2df43b49ed91b3cccdb0db0d7caf18783a68fa32040f5bd2dd8b9c9c60da67e1cdd9834081c5882554cd59d94de6c8d1a4');
            } //planning TC
            elseif ($promo == "TC1G1.1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214419b2023522019dde0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "TC1G1.2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002146f532e7d1de5620fe0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "TC1G2.1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002143da2396ba7678ad1e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } elseif ($promo == "TC1G2.2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002147763cd1fd0ef5523e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "TC1G3.1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc387320021426b91675987b09d3e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "TC1G3.2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc387320021477f56a4ee094fc88e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } elseif ($promo == "TC1G4.1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc387320021468db34082f11e4f6e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073bbc769bd960c176308d3f4109b6629391');
            } elseif ($promo == "TC1G4.2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214e541967672301e36e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "TC2A1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214c9093fcd7412108ce0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aee1b3a1aabd134b19fe215384c1edd6c2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } elseif ($promo == "TC2A2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214e15caf47edbd9640e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aee1b3a1aabd134b19fe215384c1edd6c2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } elseif ($promo == "TC2B1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214c572741ec015ed0ae0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aee1b3a1aabd134b19fe215384c1edd6c2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } elseif ($promo == "TC2B2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002145dcf84c7f2a660b9e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aee1b3a1aabd134b19fe215384c1edd6c2973627c2eb073b1729db8f66a919558d3f4109b6629391');
            } elseif ($promo == "TC2C1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc387320021432916a9d93a2cb39e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aee1b3a1aabd134b19fe215384c1edd6c2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } elseif ($promo == "TC2C2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002149717221d18344fe6e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aee1b3a1aabd134b19fe215384c1edd6c2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } elseif ($promo == "TC2D1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002145549d5972c97c12ce0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aee1b3a1aabd134b19fe215384c1edd6c2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } elseif ($promo == "TC2D2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214ee360c22a5c1fe4ae0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aee1b3a1aabd134b19fe215384c1edd6c2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } //plannig GEA
            elseif ($promo == "GEA1G1") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214d650a19abd8fe627324cfcf2e9e6b4356213d7c347ee7c2df43b49ed91b3cccdb0db0d7caf18783a68fa32040f5bd2ddc678a65850584e43d9834081c5882554cd59d94de6c8d1a4');
            } elseif ($promo == "GEA1G2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002147c3c10a66cd8bfd6324cfcf2e9e6b4356213d7c347ee7c2df43b49ed91b3cccdb0db0d7caf18783a68fa32040f5bd2ddc678a65850584e43d9834081c5882554cd59d94de6c8d1a4');
            } elseif ($promo == "GEA1G3") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002146a31302ca0e76372324cfcf2e9e6b4356213d7c347ee7c2df43b49ed91b3cccdb0db0d7caf18783a68fa32040f5bd2ddc678a65850584e43d9834081c5882554cd59d94de6c8d1a4');
            } elseif ($promo == "GEA1G4") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002141b235d4f221c4539324cfcf2e9e6b4356213d7c347ee7c2df43b49ed91b3cccdb0db0d7caf18783a68fa32040f5bd2ddc678a65850584e43d9834081c5882554cd59d94de6c8d1a4');
            } elseif ($promo == "GEA1G5") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214045a6c310cfefbb4324cfcf2e9e6b4356213d7c347ee7c2df43b49ed91b3cccdb0db0d7caf18783a68fa32040f5bd2ddc678a65850584e43d9834081c5882554089db6340955f944');
            } elseif ($promo == "GEA1G6 All") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214cbf968dd7794f323324cfcf2e9e6b4356213d7c347ee7c2df43b49ed91b3cccdb0db0d7caf18783a68fa32040f5bd2ddc678a65850584e43d9834081c5882554cd59d94de6c8d1a4');
            } elseif ($promo == "GEA1G6 esp") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214211a57899f2cb87fe0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } elseif ($promo == "GEA1G7 All") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002142549c502daf2477de0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "GEA1G7 esp") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002142fce7c3ecf26e5b7e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "GEA2GCF A All") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214144390697100a329e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } elseif ($promo == "GEA2GCF A esp") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002144dba871723dc5dbce0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "GEA2GCF B") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002146495590bcc2d99f2e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "GEA2GCF C") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214b105e91427e6292ae0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "GEA2GMO 1 All") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214997813dbe83f2a55e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "GEA2GMO 1 esp") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214985dc7976bd2e691e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "GEA2GMO 2") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214f3d47c2277155f85e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "GEA2GRH All") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc387320021411a2c798756397c8e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b6294401ebd0343058d3f4109b6629391');
            } elseif ($promo == "GEA2GRH esp") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214b1485c67bace63aee0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "GEA2GMO 7 All") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214eb70783dab3ea8cfe0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "GEA2GMO 7 esp") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc387320021402fb25b122a21a76e0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152aa9968683a1f104985a0a3f75ee8b61ec2973627c2eb073b43b00c8d695a723a8d3f4109b6629391');
            } elseif ($promo == "LP1DLIS") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002141cce681f91850c4ae0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152d0472efb473cb41fbcd12dfcc8a8c0e5c2973627c2eb073bd069ac5dd47c66c98d3f4109b6629391');
            } elseif ($promo == "LP2DLIS") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214e98ac653207f558ae0fa50826f0818af4a82a8fde6ce3f14906f45af276f59ae8fac93f781e86152d0472efb473cb41fbcd12dfcc8a8c0e5c2973627c2eb073bd069ac5dd47c66c98d3f4109b6629391');
            } elseif ($promo == "LP1CYBER" || $promo == "LP2CYBER") {
                $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc38732002141cce1e81e8bf7b37fa37e64353c042d78108e2ec348924488192bcbbe409d97dd0f533a6f63751cccf716c784995bf6773baa010b830695046374e030f5b7360c3978b8a1c299ce8');
            } else $calendrier = null;
            file_put_contents("ics/$promo.ics", $calendrier);
        }
    }
    return $calendrier;
}

function compressionJM(&$jour, &$mois, &$annee, &$Sjour)
{
    $timestamp = mktime(0, 0, 0, $mois, $jour, $annee);
    $jour = date("j", $timestamp);
    $mois = date("m", $timestamp);
    $annee = date("Y", $timestamp);
    $Sjour = date("N", $timestamp);
}

function horaire($hor, $temps2)
{
    $c = (10 + $hor) * 100 + $temps2;
    return $c;
}

function getJour()
{
    $jourL["0"] = "err";
    $jourL["1"] = "Lundi";
    $jourL["2"] = "Mardi";
    $jourL["3"] = "Mercredi";
    $jourL["4"] = "Jeudi";
    $jourL["5"] = "Vendredi";
    $jourL["6"] = "Samedi";
    $jourL["7"] = "Dimanche";
    return $jourL;
}

function getMois()
{
    $jourL["0"] = "err";
    $moisL["1"] = "Janvier";
    $moisL["2"] = "Février";
    $moisL["3"] = "Mars";
    $moisL["4"] = "Avril";
    $moisL["5"] = "Mai";
    $moisL["6"] = "Juin";
    $moisL["7"] = "Juillet";
    $moisL["8"] = "Août";
    $moisL["9"] = "Septembre";
    $moisL["10"] = "Octobre";
    $moisL["11"] = "Novembre";
    $moisL["12"] = "Décembre";
    return $moisL;
}

function getSalle()
{
    $salleL["126"] = "B126 ";
    $salleL["141"] = "B141 ";
    $salleL["024"] = "B024 ";
    $salleL["029"] = "B026 ";
    $salleL["003"] = "B003 ";
    $salleL["005"] = "B005 ";
    $salleL["022"] = "B022 ";
    $salleL["028"] = "B028 ";
    $salleL["035"] = "B035 ";
    $salleL["037"] = "B037 ";
    return $salleL;
}

function typeCase($match)
{
    $typeCase = "NUL";
    if (strstr($match, "CM") || strstr($match, "Amphi")) {
        $typeCase = "CM";
    }
    if (strstr($match, "TD")) {
        $typeCase = "TD";
    }
    if (strstr($match, "TP")) {
        $typeCase = "TP";
    }
    return $typeCase;
}

function getEmplacement($heure, $min, $temps1, $temps2)
{
    $ret = (2 + ($heure - 8) * 4 + $min / 15) . "/" . (2 + ($temps1 - 8) * 4 + $temps2 / 15);
    if ((2 + ($heure - 8) * 4 + $min / 15) < 0)
        $ret = "0/0";
    return "style='grid-row:" . $ret . ";'";
}

//function retourne info String
function getTitre()
{
    //affichage mois annee menu sup
    if (isset($_POST["D"])) {
        $jD = htmlspecialchars($_POST["D"]) * 7 + 1;
    } else {
        $jD = 0;
    }
    $jourA = intval(date("d") + $jD);
    $moisA = date("m");
    $anneeA = date("Y");
    $Sjour = 0;
    compressionJM($jourA, $moisA, $anneeA, $Sjour);
    $moisL = getMois();
    $moisA = intval($moisA);
    $timestamp = mktime(0, 0, 0, $moisA, $jourA, $anneeA);
    $nSem = date("W", $timestamp);
    return $moisL[$moisA] . " " . $anneeA . " | Semaine " . $nSem;
}

function getGroup()
{
    if ($_POST['dept'] != null && $_POST["group"] != null && $_POST["annee"] != null) {
        $dept = htmlspecialchars($_POST['dept']);
        $group = htmlspecialchars($_POST["group"]);
        $annee = htmlspecialchars($_POST["annee"]);
        return $dept . $annee . $group;
    } else {
        return "";
    }
}

function getSalleLibre()
{
    $calendrier = file_get_contents('https://planning.univ-ubs.fr/jsp/custom/modules/plannings/anonymous_cal.jsp?data=8241fc3873200214d31fc22145ae5a6cec380acd54f6ef25e1268055ef30541b9a26113b894fb6da29a910ab7215b887c302758449fbd53d8090dc208afc81e5136669d5d81b5e7ff495e3e8910fd4f00234b9d7b7225c8ea1274940c72ac622ccc019f28c3c7ac7d185f78efad292c1dad50f9fd694f7ca66ac3b5bb16186c9fa4f195065c394d2c620cd00283f4678fe6ab6da2293ad64ccf919b9001e989c65927d16c1d48c75726fb359153126e7d1bb95aa76bef7d8d0227a9394e52778fb6e940cb2d3a56888ba8c04e1d259f061540aba384fd665b32d4d8861081fe4aaa7c6ceb5591f3946551e502748cea27c5ae48e50baec33fa071546b18e95a20708d34c57a1da7a7750cf289ce6252e6bd86c85873e1c03b30d31395117d746e7f559b7bccd65af84d53637f997c2bbc0eedfac82f8d3b4da002bcfa505c0761a787b160c28c9a281387a2f046e602bdd2d76016b33c64a702ee0a972bd97defd66a78bd25745edf6150f206ca035a50f8fe6833571a4dc62da66decc7af531d58d0e49222e3438c9ecd866fc6c483b019a969a850bab1d3e80ce50c697a6cbdfec911fef26aa4301a92bd24b3ff5897adb757bc75e7989f8a8107660e456f83281813fc5508b8931158c3605c92f1b555888d70acd5cc474870aa232b90d7dc5b2f46281e2f62068482f72fa02eaa7722c6408a02313ba269e6232c8774b7ed07358d414703280a2af4afcdcd9ed9be971c9a61f4bd352a65d5e30d44e96a8e65f7b70e4ed7ec1728da241243ca80c473dd584ba796ed8f287e3b203dcea3ec25333f96991f10666eebe4cb3d7b137948aacbf38926fd37f0ddabcb03f08cb128c93bc4fcb6de69584c3bcdb178ee67ee5dd161cc423ab504cdf3c1acef8543cfd5b81b930e6b6cec0db97247709248af069ff1fd12df955944ed43e152021893c651df862915e9dacf760c9a92ce180bab4d2ceceb0fc');
    $regExpMatch = '/SUMMARY:(.*)/';
    $regExpDate = '/DTSTART:(.*)/';
    $regExpLoc = '/LOCATION:(.*)/';
    $regExpDesc = '/DESCRIPTION:(.*)/';
    $regExpStamp = '/DTEND:(.*)/';
    //vairable salle
    $salleL = getSalle();
    // Variable info .ics
    $n = preg_match_all($regExpMatch, $calendrier, $matchTableau, PREG_PATTERN_ORDER);
    preg_match_all($regExpDate, $calendrier, $dateTableau, PREG_PATTERN_ORDER);
    preg_match_all($regExpLoc, $calendrier, $locTableau, PREG_PATTERN_ORDER);
    preg_match_all($regExpDesc, $calendrier, $descTableau, PREG_PATTERN_ORDER);
    preg_match_all($regExpStamp, $calendrier, $StampTableau, PREG_PATTERN_ORDER);
    for ($j = 0; $j < $n; ++$j) {
        $annee = substr($dateTableau[0][$j], 8, 4);
        $mois = substr($dateTableau[0][$j], 12, 2);
        if (intval($mois) >= 4) {
            $Hdécalage = 2;
        } else {
            $Hdécalage = 1;
        }
        $jour = substr($dateTableau[0][$j], 14, 2);
        $heure = substr($dateTableau[0][$j], 17, 2) + $Hdécalage;
        $min = substr($dateTableau[0][$j], 19, 2);
        $match = substr($matchTableau[0][$j], 8);
        $loc = substr($locTableau[0][$j], 11);
        $desc = substr($descTableau[0][$j], 12);
        $temps1 = substr($StampTableau[0][$j], 15, 2) + $Hdécalage;
        $temps2 = substr($StampTableau[0][$j], 17, 2);
        if ($heure <= date("G") && $min <= date("i") && $temps1 >= date("G") && $temps2 >= date("i") && $jour == date("d") && $mois == date("m")) {
            $salleL[substr($loc, 2, 3)] = "";
        }
    }
    return implode("", $salleL);
}

//function principale
function testDataPost()
{
    $ret = false;
    if (isset($_POST["dept"])) {
        $dept = htmlspecialchars($_POST["dept"]);
    } else {
        $dept = "";
    }
    if (isset($_POST["group"])) {
        $group = htmlspecialchars($_POST["group"]);
    } else {
        $group = "";
    }
    if (isset($_POST["annee"])) {
        $annee = htmlspecialchars($_POST["annee"]);
    } else {
        $annee = "";
    }
    $promo = $dept . $annee . $group;
    if ($promo == "") {
        if ($_COOKIE["mode"] != null) {
            $mode = $_COOKIE["mode"];
            echo "<script>post('mode','" . $mode . "');</script>";
        } else {
            echo "<script>post('mode','sombre');</script>";
        }
        if ($_COOKIE["annee"] != null && $_COOKIE["dept"] != null && $_COOKIE["group"] != null) {
            $annee = $_COOKIE["annee"];
            $dept = $_COOKIE["dept"];
            $group = $_COOKIE["group"];
            echo "
            <script>
                post('annee','" . $annee . "');
                post('dept','" . $dept . "');
                post('group','" . $group . "');
                post_url();
            </script>";
            $ret = true;
        } else {
            echo "
            <script>
                post('annee',2);
                post('dept','INFO');
                post('group','D2');
                post_url();
            </script>";
            $ret = true;
        }
    }
    return $ret;
}

function affichage()
{
    // si aucune info GET: sortir
    if (isset($_POST["dept"])) {
        $dept = htmlspecialchars($_POST["dept"]);
    } else {
        $dept = "";
    }
    if (isset($_POST["group"])) {
        $group = htmlspecialchars($_POST["group"]);
    } else {
        $group = "";
    }
    if (isset($_POST["annee"])) {
        $annee = htmlspecialchars($_POST["annee"]);
    } else {
        $annee = "";
    }
    $promo = $dept . $annee . $group;
    // récupère jD
    if (isset($_POST["D"])) {
        $jD = htmlspecialchars($_POST["D"]) * 7;
    } else {
        $jD = 0;
    }
    //set mode
    if (isset($_POST['mode'])) {
        $mode = $_POST['mode'];
        if ($mode == "clair") {
            echo "<script>
                document.getElementById(\"stylesheet\").setAttribute(\"href\", \"ressources/css/style white.css\");
                document.getElementById(\"modeF\").innerHTML = \"Clair ☀️\";
            </script>";
        }
    }

    $jour = date("j") + $jD + 1;
    $mois = date("n");
    $annee = date("Y");
    $Sjour = date("N");
    if ($Sjour > 5) {
        $Sjour = 7 - $Sjour;
    } else {
        $Sjour = $Sjour * (-1);
    }
    $jour = $jour + $Sjour;
    compressionJM($jour, $mois, $annee, $Sjour);

    $calendrier = getcalendar($promo);

// Variable type info .ics
    $regExpMatch = '/SUMMARY:(.*)/';
    $regExpDate = '/DTSTART:(.*)/';
    $regExpLoc = '/LOCATION:(.*)/';
    $regExpDesc = '/DESCRIPTION:(.*)/';
    $regExpStamp = '/DTEND:(.*)/';

// Variable info .ics
    $n = preg_match_all($regExpMatch, $calendrier, $matchTableau, PREG_PATTERN_ORDER);
    preg_match_all($regExpDate, $calendrier, $dateTableau, PREG_PATTERN_ORDER);
    preg_match_all($regExpLoc, $calendrier, $locTableau, PREG_PATTERN_ORDER);
    preg_match_all($regExpDesc, $calendrier, $descTableau, PREG_PATTERN_ORDER);
    preg_match_all($regExpStamp, $calendrier, $StampTableau, PREG_PATTERN_ORDER);

    $jourL = getJour();
    $moisL = getMois();

    $Dcontenu = array("vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide");
    $DcontenuP = array("vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide", "vide");

    for ($d = 0; $d < 15; ++$d) {
        // compression jour/mois
        $Sjour = 0;
        compressionJM($jour, $mois, $annee, $Sjour);
        if ((intval($mois) >= 4 && intval($mois) < 10) || (intval($mois)===10 && intval($jour)<25)) {
            $Hdécalage = 2;
        } else {
            $Hdécalage = 1;
        }
        for ($j = 0; $j < $n; ++$j) {
            // Récupération des données
            $anneeC = substr($dateTableau[0][$j], 8, 4);
            $moisC = substr($dateTableau[0][$j], 12, 2);
            $jourC = substr($dateTableau[0][$j], 14, 2);
            $heureC = substr($dateTableau[0][$j], 17, 2) + $Hdécalage;
            $minC = substr($dateTableau[0][$j], 19, 2);
            $matchC = substr($matchTableau[0][$j], 8);
            $locC = substr($locTableau[0][$j], 11);
            $descC = substr($descTableau[0][$j], 14);
            $heureFC = substr($StampTableau[0][$j], 15, 2) + $Hdécalage;
            $minFC = substr($StampTableau[0][$j], 17, 2);
            $descTab = explode("\\n", $descC);
            // Mise en forme
            $date = $jourC . "/" . $moisC . "/" . $anneeC;
            $horaire = " " . $heureC . "h" . $minC . "-" . $heureFC . "h" . $minFC;
            $hor = $heureC . "-" . $minC;
            //horaire 1h30
            $c = horaire($hor, $minC);
            //couleur case
            $typeCase = typeCase($matchC);
            //affichage cours
            if ($annee == $anneeC) {
                if (($jourC == $jour && $moisC == $mois) && ($d < 5)) {
                    //si jour vide
                    if ($jour == $jourC) {
                        $Dcontenu[$d] = "";
                    }

                    $emp = getEmplacement($heureC, $minC, $heureFC, $minFC);
                    echo "<div id='box' class='p" . $d . " " . $typeCase . " noneP'" . $emp . ">";
                    echo "<Strong>" . $matchC . "</Strong><br>" . $horaire . "  " . $locC;
                    echo $descTab[1];
                    if (isset($descTab[2])) {
                        if (strstr($descTab[2], '(Exporté le:')) {
                            $descTab[2] = "";
                        }
                        echo " " . $descTab[2];
                    }
                    echo "</div>";
                }
            }
            if ($jour == $jourC && ($jourC >= date("d") || $moisC != date("m")) && $mois == $moisC && ($jourC != date("j") || (date("G") + date("i") / 60) <= ($heureFC + $minFC / 60))) {
                if ((int)$moisC >= (int)date("n")) {
                    //si jour vide (ne pas afficher sur portable)
                    if ($jour == $jourC) {
                        $DcontenuP[$d] = "";
                    }
                    echo "<div id='boxP' class='p" . $d . " c" . $c . " " . $typeCase . " nonePC' style='order: " . ($d + 1) . "0" . ($c + 1) . ";grid-column: 1;'>";
                    echo "<strong>";
                    echo $matchC . "</strong><br>" . $horaire . "  " . $locC;
                    echo $descTab[1];
                    if (isset($descTab[2])) {
                        if (strstr($descTab[2], '(Exporté le:')) {
                            $descTab[2] = "";
                        }
                        echo " " . $descTab[2];
                    }
                    echo "</div>";
                }
            }
        }
        echo "<div class='p" . $d . " c-1 " . $DcontenuP[$d] . " nonePC' style='order: " . ($d + 1) . "00000;grid-column: 1; '>" . $jourL[$Sjour] . ' ' . ($jour) . ' ' . $moisL[intval($mois)] . "</div>";
        $dateCara = "";
        if (($jour) == date("j") && intval($mois) == date("m")) {
            $dateCara = "HASH";
        }
        if ($d < 5) {
            echo "<div class='p" . $d . " " . $dateCara . " c-1 " . $Dcontenu[$d] . " noneP'>" . $jourL[$Sjour] . ' ' . ($jour) . ' ' . $moisL[intval($mois)] . "</div>";
        }
        $jour = $jour + 1;
    }
}

?>
