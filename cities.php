<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://fcmtravel.co.ke/jquery-ui.js"></script>
<script>
  $(function() {
    var availableTags = [
      {"dare": "pablo"},
      "Aberdeen, SD (ABR)",
      "Abilene, TX (ABI)",
      "Adak Island, AK (ADK)",
      "Akiachak, AK (KKI)",
      "Akiak, AK (AKI)",
      "Akron/Canton, OH (CAK)",
      "Akuton, AK (KQA)",
      "Alakanuk, AK (AUK)",
      "Alamogordo, NM (ALM)",
      "Alamosa, CO (ALS)",
      "Albany, NY (ALB)",
      "Albany, OR - Bus service (CVO)",
      "Albany, OR - Bus service (QWY)",
      "Albuquerque, NM (ABQ)",
      "Aleknagik, AK (WKK)",
      "Alexandria, LA (AEX)",
      "Allakaket, AK (AET)",
      "Allentown, PA (ABE)",
      "Alliance, NE (AIA)",
      "Alpena, MI (APN)",
      "Altoona, PA (AOO)",
      "Amarillo, TX (AMA)",
      "Ambler, AK (ABL)",
      "Anaktueuk, AK (AKP)",
      "Anchorage, AK (ANC)",
      "Angoon, AK (AGN)",
      "Aniak, AK (ANI)",
      "Anvik, AK (ANV)",
      "Appleton, WI (ATW)",
      "Arcata, CA (ACV)",
      "Arctic Village, AK (ARC)",
      "Asheville, NC (AVL)",
      "Ashland, KY/Huntington, WV (HTS)",
      "Aspen, CO (ASE)",
      "Athens, GA (AHN)",
      "Atka, AK (AKB)",
      "Atlanta, GA (ATL)",
      "Atlantic City, NJ (AIY)",
      "Atqasuk, AK (ATK)",
      "Augusta, GA (AGS)",
      "Augusta, ME (AUG)",
      "Austin, TX (AUS)",
      "ActionScript",
      "AppleScript",
      "Zurich, Switzerland (ZRH)"
    ];
    $("#External_FlightFareSearch_From").autocomplete({
      source: availableTags
    });
    $("#External_FlightFareSearch_To").autocomplete({
      source: availableTags
    });
  });
</script>
<form action="http://www.amadeusepower.com/ctl/portals/ctl/flightfaresearch.aspx" method="get" name="flightsearch" target="_top"><input type="hidden" name="IsExternalAccess" value="true" />
  <table>
    <tbody>

      <tr>
        <td><label> From:</label></td>
        <td><input id="External_FlightFareSearch_From" style="height: 25px;" type="text" name="External_FlightFareSearch_From" size="13" /></td>
      </tr>
      <tr>
        <td><label> To :</label></td>
        <td>
          <select id="External_FlightFareSearch_To" name="External_FlightFareSearch_To">
            <option value="ABR">  Aberdeen, SD (ABR)  </option>
            <option value="ABI">  Abilene, TX (ABI)   </option>
            <option value="ADK">  Adak Island, AK (ADK)   </option>
            <option value="KKI">  Akiachak, AK (KKI)  </option>
            <option value="AKI">  Akiak, AK (AKI) </option>
            <option value="CAK">  Akron/Canton, OH (CAK)  </option>
            <option value="KQA">  Akuton, AK (KQA)    </option>
            <option value="AUK">  Alakanuk, AK (AUK)  </option>
            <option value="ALM">  Alamogordo, NM (ALM)    </option>
            <option value="ALS">  Alamosa, CO (ALS)   </option>
            <option value="ALB">  Albany, NY (ALB)    </option>
            <option value="CVO">  Albany, OR - Bus service (CVO)  </option>
            <option value="ABE">  Allentown, PA (ABE) </option>
            <option value="AIA">  Alliance, NE (AIA)  </option>
            <option value="APN">  Alpena, MI (APN)    </option>
            <option value="AOO">  Altoona, PA (AOO)   </option>
            <option value="AMA">  Amarillo, TX (AMA)  </option>
            <option value="ABR">  Aberdeen, SD (ABR)  </option>
            <option value="ABI">  Abilene, TX (ABI)   </option>
            <option value="ADK">  Adak Island, AK (ADK)   </option>
            <option value="ALS">  Alamosa, CO (ALS)   </option>
            <option value="ALB">  Albany, NY (ALB)    </option>
            <option value="CVO">  Albany, OR - Bus service (CVO)  </option>
            <option value="QWY">  Albany, OR - Bus service (QWY)  </option>
            <option value="ABQ">  Albuquerque, NM (ABQ)   </option>
            <option value="WKK">  Aleknagik, AK (WKK) </option>
            <option value="AEX">  Alexandria, LA (AEX)    </option>
            <option value="AMA">  Amarillo, TX (AMA)  </option>
            <option value="ABL">  Ambler, AK (ABL)    </option>
            <option value="AKP">  Anaktueuk, AK (AKP) </option>
            <option value="ANC">  Anchorage, AK (ANC) </option>
            <option value="AGN">  Angoon, AK (AGN)    </option>
            <option value="ANI">  Aniak, AK (ANI) </option>
            <option value="ANV">  Anvik, AK (ANV) </option>
            <option value="ASE">  Aspen, CO (ASE) </option>
            <option value="AHN">  Athens, GA (AHN)    </option>
            <option value="AKB">  Atka, AK (AKB)  </option>
            <option value="ATL">  Atlanta, GA (ATL)   </option>
            <option value="AIY">  Atlantic City, NJ (AIY) </option>
            <option value="ATK">  Atqasuk, AK (ATK)   </option>
           <option value="BRW">  Barrow, AK (BRW)    </option>
            <option value="BTI">  Barter Island, AK (BTI) </option>
            <option value="BTR">  Baton Rouge, LA (BTR)   </option>
            <option value="MBS">  Bay City, MI (MBS)  </option>
            <option value="BPT">  Beaumont/Port Arthur, TX (BPT)  </option>
            <option value="ZBV">  Beaver Creek, CO - Van service (ZBV)    </option>
            <option value="WBQ">  Beaver, AK (WBQ)    </option>
            <option value="BKW">  Beckley, WV (BKW)   </option>
            <option value="BED">  Bedford, MA (BED)   </option>
            <option value="BTT">  Bettles, AK (BTT)   </option>
            <option value="BIL">  Billings, MT (BIL)  </option>
            <option value="GPT">  Biloxi/Gulfport, MS (GPT)   </option>
            <option value="BGM">  Binghamton, NY (BGM)    </option>
            <option value="KBC">  Birch Creek, AK (KBC)   </option>
            <option value="BHM">  Birmingham, AL (BHM)    </option>
            <option value="BIS">  Bismarck, ND (BIS)  </option>
            <option value="BID">  Block Island, RI (BID)  </option>
            <option value="WHH">  Boulder, CO - Hiltons Har H (WHH)   </option>
            <option value="WBU">  Boulder, CO - Municipal Airport (WBU)   </option>
            <option value="BYA">  Boundary, AK (BYA)  </option>
            <option value="BWG">  Bowling Green, KY (BWG) </option>
            <option value="BZN">  Bozeman, MT (BZN)   </option>
            <option value="BFD">  Bradford, PA (BFD)  </option>
           <option value="BRO">  Brownsville, TX (BRO)   </option>
            <option value="BQK">  Brunswick, GA (BQK) </option>
            <option value="BKC">  Buckland, AK (BKC)  </option>
            <option value="BUF">  Buffalo, NY (BUF)   </option>
            <option value="IFP">  Bullhead City/Laughlin, AZ (IFP)    </option>
            <option value="BUR">  Burbank, CA (BUR)   </option>
            <option value="BRL">  Burlington, IA (BRL)    </option>
            <option value="BTV">  Burlington, VT (BTV)    </option>
            <option value="BTM">  Butte, MT (BTM)     </option>
            <option value="CAK">  Canton/Akron, OH (CAK)  </option>
             <option value="MRY">  Carmel, CA (MRY)    </option>
            <option value="CPR">  Casper, WY (CPR)    </option>
            <option value="CDC">  Cedar City, UT (CDC)    </option>
            <option value="CID">  Cedar Rapids, IA (CID)  </option>
            <option value="CEM">  Central, AK (CEM)   </option>
            <option value="CDR">  Chadron, NE (CDR)   </option>
            <option value="CIK">  Chalkyitsik, AK (CIK)   </option>
            <option value="CHI">  Chicago, IL - All airports (CHI)    </option>
            <option value="MDW">  Chicago, IL - Midway (MDW)  </option>
            <option value="ORD">  Chicago, IL - O'Hare (ORD)  </option>
            <option value="CKX">  Chicken, AK (CKX)   </option>
            <option value="CIC">  Chico, CA (CIC) </option>
            <option value="KCG">  Chignik, AK - Fisheries (KCG)   </option>
            <option value="KCQ">  Chignik, AK - (KCQ) </option>
            <option value="IRC">  Circle, AK (IRC)    </option>
            <option value="CLP">  Clarks Point, AK (CLP)  </option>
            <option value="CKB">  Clarksburg, WV (CKB)    </option>
            <option value="PIE">  Clearwater/St Petersburg, FL (PIE)  </option>
             <option value="COU">  Columbia, MO (COU)  </option>
            <option value="CAE">  Columbia, SC (CAE)  </option>
            <option value="CSG">  Columbus, GA (CSG)  </option>
            <option value="GTR">  Columbus, MS (GTR)  </option>
            <option value="CMH">  Columbus, OH (CMH)  </option>
            <option value="CCR">  Concord, CA (CCR)   </option>
            <option value="CNK">  Concordia, KS (CNK) </option>
            <option value="QCE">  Copper Mountain, CO - Van service (QCE) </option>
            <option value="CDV">  Cordova, AK (CDV)   </option>
            <option value="CKO">  Crooked Creek, AK (CKO) </option>
            <option value="CUW">  Cube Cove, AK (CUW) </option>
            <option value="CBE">  Cumberland, MD (CBE)    </option>
            <option value="DAL">  Dallas, TX - Love Field (DAL)   </option>
            <option value="DFW">  Dallas, TX - Dallas/Ft Worth Intl (DFW)    </option>
            <option value="DAY">  Dayton, OH (DAY)    </option>
            <option value="DVL">  Devil's Lake, ND (DVL)  </option>
            <option value="DIK">  Dickinson, ND (DIK) </option>
            <option value="DLG">  Dillingham, AK (DLG)    </option>
            <option value="DDC">  Dodge City, KS (DDC)    </option>
            <option value="DHN">  Dothan, AL (DHN)    </option>
            <option value="DUJ">  Dubois, PA (DUJ)    </option>
             <option value="EDA">  Edna Bay, AK (EDA)  </option>
            <option value="EEK">  Eek, AK (EEK)   </option>
            <option value="KKU">  Ekuk, AK (KKU)  </option>
            <option value="KEK">  Ekwok, AK (KEK) </option>
            <option value="IPL">  El Centro, CA (IPL) </option>
            <option value="ELD">  El Dorado, AR (ELD) </option>
            <option value="ELP">  El Paso, TX (ELP)   </option>
            <option value="ELV">  Elfin Cove, AK (ELV)    </option>
            <option value="ERI">  Erie, PA (ERI)  </option>
            <option value="ESC">  Escanaba, MI (ESC)  </option>
            <option value="EUG">  Eugene, OR (EUG)    </option>
            <option value="ACV">  Eureka/Arcata, CA (ACV) </option>
            <option value="EUE">  Eureka, NV (EUE)    </option>
             <option value="FMN">  Farmington, NM (FMN)    </option>
            <option value="FYV">  Fayetteville, AR - Municipal/Drake (FYV)    </option>
            <option value="XNA">  Fayetteville, AR - Northwest Arkansas Regional (XNA)    </option>
            <option value="FAY">  Fayetteville, NC (FAY)  </option>
            <option value="FLG">  Flagstaff, AZ (FLG) </option>
            <option value="FNT">  Flint, MI (FNT) </option>
            <option value="FLO">  Florence, SC (FLO)  </option>
            <option value="MSL">  Florence/Muscle Shoals/Sheffield, AL (MSL)  </option>
             <option value="RSW">  Fort Myers, FL (RSW)    </option>
            <option value="FSM">  Fort Smith, AR (FSM)    </option>
            <option value="VPS">  Fort Walton Beach, FL (VPS) </option>
            <option value="FWA">  Fort Wayne, IN (FWA)    </option>
            <option value="DFW">  Fort Worth/Dallas, TX (DFW) </option>
            <option value="FKL">  Franklin, PA (FKL)  </option>
            <option value="FAT">  Fresno, CA (FAT)    </option>
            <option value="GNV">  Gainesville, FL (GNV)   </option>
            <option value="GUP">  Gallup, NM (GUP)    </option>
            <option value="GCK">  Garden City, KS (GCK)   </option>
            <option value="GYY">  Gary, IN (GYY)  </option>
            <option value="GCC">  Gillette, WY (GCC)  </option>
            <option value="GGG">  Gladewater/Kilgore, TX (GGG)    </option>
            <option value="GGW">  Glasgow, MT (GGW)   </option>
            <option value="GDV">  Glendive, MT (GDV)  </option>
            <option value="GLV">  Golovin, AK (GLV)   </option>
            <option value="GNU">  Goodnews Bay, AK (GNU)  </option>
            <option value="JGC">  Grand Canyon, AZ - Heliport (JGC)   </option>
            <option value="GCN">  Grand Canyon, AZ - National Park (GCN)  </option>
            <option value="GTF">  Great Falls, MT (GTF)   </option>
            <option value="GRB">  Green Bay, WI (GRB) </option>
            <option value="GSO">  Greensboro, NC (GSO)    </option>
            <option value="GLH">  Greenville, MS (GLH)    </option>
             <option value="GUC">  Gunnison, CO (GUC)  </option>
            <option value="GST">  Gustavus, AK (GST)  </option>
            <option value="HGR">  Hagerstown, MD (HGR)    </option>
            <option value="SUN">  Hailey, ID (SUN)    </option>
            <option value="HNS">  Haines, AK (HNS)    </option>
            <option value="PHF">  Hampton, VA (PHF)   </option>
             <option value="MDT">  Harrisburg, PA (MDT)    </option>
            <option value="HRO">  Harrison, AR (HRO)  </option>
            <option value="BDL">  Hartford, CT (BDL)  </option>
            <option value="HAE">  Havasupai, AZ (HAE) </option>
            <option value="HVR">  Havre, MT (HVR) </option>
            <option value="GSO">  High Point, NC (GSO)    </option>
            <option value="ITO">  Hilo, HI - Island of Hawaii (ITO)   </option>
            <option value="HHH">  Hilton Head, SC (HHH)   </option>
            <option value="HBB">  Hobbs, NM (HBB) </option>
            <option value="HYL">  Hollis, AK (HYL)    </option>
          <option value="HPB">  Hooper Bay, AK (HPB)    </option>
            <option value="HOT">  Hot Springs, AR (HOT)   </option>
            <option value="HOU">  Houston, TX - All airports (HOU)    </option>
            <option value="HOU">  Houston, TX - Hobby (HOU)   </option>
            <option value="IAH">  Houston, TX - Intercontinental (IAH)    </option>
            <option value="HUS">  Hughes, AK (HUS)    </option>
            <option value="HTS">  Huntington, WV/Ashland, KY (HTS)    </option>
            <<option value="HYG">  Hydaburg, AK (HYG)  </option>
            <option value="IDA">  Idaho Falls, ID (IDA)   </option>
            <option value="IGG">  Igiugig, AK (IGG)   </option>
            <option value="ILI">  Iliamna, AK (ILI)   </option>
            <option value="IPL">  Imperial, CA (IPL)  </option>
            <<option value="ISP">  Islip, NY (ISP) </option>
            <option value="ITH">  Ithaca, NY (ITH)    </option>
            <option value="JAC">  Jackson Hole, WY (JAC)  </option>
            <option value="JAN">  Jackson, MS (JAN)   </option>
            <option value="MKL">  Jackson, TN (MKL)   </option>
            <option value="JAX">  Jacksonville, FL (JAX)  </option>
            <option value="JVL">  Janesville, WI (JVL)    </option>
            <option value="BGM">  Johnson City, NY (BGM)  </option>
            <option value="TRI">  Johnson City, TN (TRI)  </option>
             <option value="JBR">  Jonesboro, AR (JBR) </option>
            <option value="JLN">  Joplin, MO (JLN)    </option>
            <option value="JNU">  Juneau, AK (JNU)    </option>
            <option value="OGG">  Kahului, HI - Island of Maui, (OGG) </option>
            <option value="KAE">  Kake, AK (KAE)  </option>
            <option value="MUE">  Kamuela, HI - Island of Hawaii, (MUE)   </option>
            <option value="MCI">  Kansas City, MO (MCI)   </option>
            <option value="JHM">  Kapalua, HI - Island of Maui, (JHM) </option>
            <option value="KXA">  Kasaan, AK (KXA)    </option>
            <option value="KUK">  Kasigluk, AK (KUK)  </option>
            <option value="LIH">  Kauai Island/Lihue, HI (LIH)    </option>
             <option value="QKS">  Keystone, CO - Van service (QKS)    </option>
            <option value="IAN">  Kiana, AK (IAN) </option>
            <option value="GGG">  Kilgore/Gladewater, TX (GGG)    </option>
            <option value="ILE">  Killeen, TX (ILE)   </option>
           <option value="KOA">  Kona, HI - Island of Hawaii (KOA)   </option>
            <option value="KKH">  Kongiganak, AK (KKH)    </option>
            <option value="KOT">  Kotlik, AK (KOT)    </option>
            <option value="OTZ">  Kotzebue, AK (OTZ)  </option>
            <option value="KYU">  Koyukuk, AK (KYU)   </option>
            <option value="KWT">  Kwethluk, AK (KWT)  </option>
            <option value="KWK">  Kwigillingok, AK (KWK)  </option>
            <option value="LSE">  La Crosse, WI (LSE) </option>
            <option value="LAF">  Lafayette, IN (LAF) </option>
            <option value="KLL">  Levelock, AK (KLL)  </option>
            <option value="LWB">  Lewisburg, WV (LWB) </option>
            <option value="LWS">  Lewiston, ID (LWS)  </option>
            <option value="LWT">  Lewistown, MT (LWT) </option>
            <option value="LEX">  Lexington, KY (LEX) </option>
            <option value="LAX">  Los Angeles, CA (LAX)   </option>
            <option value="SDF">  Louisville, KY (SDF)    </option>
            <option value="FNL">  Loveland/Fort Collins, CO - Municipal Airport (FNL)     </option>
            <option value="QWF">  Loveland/Fort Collins, CO - Bus service (QWF)   </option>
            <option value="LBB">  Lubbock, TX (LBB)   </option>
            <option value="MCN">  Macon, GA (MCN) </option>
            <option value="MSN">  Madison, WI (MSN)   </option>
            <option value="MDJ">  Madras, OR (MDJ)    </option>
            <option value="MHT">  Manchester, NH (MHT)    </option>
            <option value="MHK">  Manhattan, KS (MHK) </option>
            <option value="MWA">  Marion, IL (MWA)    </option>
            <option value="MQT">  Marquette, MI (MQT) </option>
            <option value="MLL">  Marshall, AK (MLL)  </option>
            <option value="MVY">  Martha's Vineyard, MA (MVY) </option>
           <option value="MCG">  Mcgrath, AK (MCG)   </option>
            <option value="MFR">  Medford, OR (MFR)   </option>
            <option value="MYU">  Mekoryuk, AK (MYU)  </option>
            <option value="MLB">  Melbourne, FL (MLB) </option>
            <option value="MEM">  Memphis, TN (MEM)   </option>
            <option value="MCE">  Merced, CA (MCE)    </option>
            <option value="MEI">  Meridian, MS (MEI)  </option>
            <option value="MTM">  Metlakatla, AK (MTM)    </option>
            <option value="WMK">  Meyers Chuck, AK (WMK)  </option>
            <option value="MIA">  Miami, FL - International (MIA) </option>
            <option value="MPB">  Miami, FL - Sea Plane Base (MPB)    </option>
            <option value="MBS">  Midland, MI (MBS)   </option>
            <option value="MAF">  Midland/Odessa, TX (MAF)    </option>
            <option value="MLS">  Miles City, MT (MLS)    </option>
            <option value="MSL">  Muscle Shoals, AL (MSL) </option>
            <option value="MKG">  Muskegon, MI (MKG)  </option>
            <option value="MYR">  Myrtle Beach, SC (MYR)  </option>
            <option value="ACK">  Nantucket, MA (ACK) </option>
            <option value="WNA">  Napakiak, AK (WNA)  </option>
            <option value="PKA">  Napaskiak, AK (PKA) </option>
            <option value="APF">  Naples, FL (APF)    </option>
            <option value="BNA">  Nashville, TN (BNA) </option>
            <option value="NKI">  Naukiti, AK (NKI)   </option>

            <option value="NGO">  Nagoya, Japan (NGO)</option>
            <option value="NAG">  Nagpur, India (NAG)  </option>
            <option value="NBO">  Nairobi, Kenya - Jomo Kenyatta Intl (NBO)   </option>
            <option value="WIL">  Nairobi, Kenya - Wilson (WIL)   </option>
            <option value="NAJ">  Nakhichevan, Azerbaijan (NAJ)   </option>
            <option value="NAK">  Nakhon Ratchosima, Thailand (NAK)   </option>

            <option value="NLG">  Nelson Lagoon, AK (NLG) </option>
            <option value="NCN">  New Chenega, AK (NCN)   </option>
            <option value="HVN">  New Haven, CT (HVN) </option>
          <option value="WTK">  Noatak, AK (WTK)    </option>
            <option value="OME">  Nome, AK (OME)  </option>
            <option value="NNL">  Nondalton, AK (NNL) </option>
            <option value="ORV">  Noorvik, AK (ORV)   </option>
            <option value="OFK">  Norfolk, NE (OFK)   </option>
            <option value="ORF">  Norfolk, VA (ORF)   </option>
            <option value="OTH">  North Bend, OR (OTH)    </option>
             <option value="OKC">  Oklahoma City, OK (OKC) </option>
            <option value="OMA">  Omaha, NE (OMA) </option>
            <option value="ONT">  Ontario, CA (ONT)   </option>
            <option value="SNA">  Orange County, CA (SNA) </option>
            <option value="ORL">  Orlando, FL - Herndon (ORL) </option>
            <option value="MCO">  Orlando, FL - International (MCO)   </option>
            <option value="OSH">  Oshkosh, WI (OSH)   </option>
            <option value="OTM">  Ottumwa, IA (OTM)   </option>
           <option value="PGA">  Page, AZ (PGA)  </option>
            <option value="PSP">  Palm Springs, CA (PSP)  </option>
            <option value="PFN">  Panama City, FL (PFN)   </option>
            <option value="PKB">  Parkersburg, WV/Marietta, OH (PKB)  </option>
            <option value="PSC">  Pasco, WA (PSC) </option>
            <option value="PDB">  Pedro Bay, AK (PDB) </option>
           <option value="TTN">  Philadelphia, PA - Trenton/Mercer NJ (TTN)  </option>
            <option value="PHX">  Phoenix, AZ (PHX)   </option>
            <option value="PIR">  Pierre, SD (PIR)    </option>
            <option value="UGB">  Pilot Point, AK - Ugashnik Bay (UGB)    </option>
            <option value="PIP">  Pilot Point, AK (PIP)   </option>
            <option value="PQS">  Pilot Station, AK (PQS) </option>
            <option value="PIT">  Pittsburgh, PA (PIT)    </option>
            <option value="PIZ">  Point Lay, AK (PIZ) </option>
            <option value="PNC">  Ponca City, OK (PNC)    </option>
            <option value="PSE">  Ponce, Puerto Rico (PSE)    </option>
            <option value="PTA">  Port Alsworth, AK (PTA) </option>
           <option value="PSM">  Portsmouth, NH (PSM)    </option>
            <option value="POU">  Poughkeepsie, NY (POU)  </option>
            <option value="PRC">  Prescott, AZ (PRC)  </option>
            <option value="PQI">  Presque Isle, ME (PQI)  </option>
            <option value="BLF">  Princeton, WV (BLF) </option>
            <option value="PVD">  Providence, RI (PVD)    </option>
            <option value="PVC">  Provincetown, MA (PVC)  </option>
            <option value="SCC">  Prudhoe Bay/Deadhorse, AK (SCC) </option>
            <option value="RMP">  Rampart, AK (RMP)   </option>
            <option value="RAP">  Rapid City, SD (RAP)    </option>
            <option value="RDG">  Reading, PA (RDG)   </option>
            <option value="RDV">  Red Devil, AK (RDV) </option>
            <option value="RDD">  Redding, CA (RDD)   </option>
            <option value="RDM">  Redmond, OR (RDM)   </option>
        <option value="ROC">  Rochester, NY (ROC) </option>
            <option value="RKS">  Rock Springs, WY (RKS)  </option>
            <option value="RFD">  Rockford, IL (RFD)  </option>
            <option value="RKD">  Rockland, ME (RKD)  </option>
            <option value="RSJ">  Rosario, WA (RSJ)   </option>
            <option value="ROW">  Roswell, NM (ROW)   </option>
            <option value="RBY">  Ruby, AK (RBY)  </option>
            <option value="RSH">  Russian Mission, AK (RSH)   </option>
            <option value="RUT">  Rutland, VT (RUT)   </option>
               <option value="STL">  Saint Louis, MO (STL)   </option>
            <option value="KSM">  Saint Mary's, AK (KSM)  </option>
            <option value="SMK">  Saint Michael, AK (SMK) </option>
            <option value="SNP">  Saint Paul Island, AK (SNP) </option>
            <option value="SLE">  Salem, OR (SLE) </option>
            <option value="SLN">  Salina, KS (SLN)    </option>
            <option value="SBY">  Salisbury-Ocean City, MD (SBY)  </option>
            <option value="SLC">  Salt Lake City, UT (SLC)    </option>
            <option value="SJT">  San Angelo, TX (SJT)    </option>
            <option value="SAF">  Santa Fe, NM (SAF)  </option>
            <option value="SMX">  Santa Maria, CA (SMX)   </option>
            <option value="STS">  Santa Rosa, CA (STS)    </option>
            <option value="SLK">  Saranac Lake, NY (SLK)  </option>
            <option value="SRQ">  Sarasota, FL (SRQ)  </option>
            <option value="CIU">  Sault Ste Marie, MI, (CIU)  </option>
            <option value="SAV">  Savannah, GA (SAV)  </option>
            <option value="SVA">  Savoonga, AK (SVA)  </option>
            <option value="SCM">  Scammon Bay, AK (SCM)   </option>
            <option value="BFF">  Scottsbluff, NE (BFF)   </option>
            <option value="AVP">  Scranton, PA (AVP)  </option>
           <option value="SHV">  Shreveport, LA (SHV)    </option>
            <option value="SHG">  Shungnak, AK (SHG)  </option>
            <option value="SVC">  Silver City, NM (SVC)   </option>
            <option value="SUX">  Sioux City, IA (SUX)    </option>
            <option value="FSD">  Sioux Falls, SD (FSD)   </option>
            <option value="SIT">  Sitka, AK (SIT) </option>
            <option value="SGY">  Skagway, AK (SGY)   </option>
            <option value="SLQ">  Sleetmore, AK (SLQ) </option>
             <option value="SBS">  Steamboat Springs, CO (SBS) </option>
            <option value="WBB">  Stebbins, AK (WBB)  </option>
            <option value="CWA">  Stevens Point/Wausau, WI (CWA)  </option>
            <option value="SVS">  Stevens Village, AK (SVS)   </option>
            <option value="SWF">  Stewart Field/Newburgh, NY (SWF)    </option>
            <option value="SCK">  Stockton, CA (SCK)  </option>
            <option value="SRV">  Stony River, AK (SRV)   </option>
            <option value="SUN">  Sun Valley, ID (SUN)    </option>
            <option value="KTS">  Teller Mission, AK (KTS)    </option>
            <option value="TEX">  Telluride, CO (TEX) </option>
            <option value="TKE">  Tenakee Springs, AK (TKE)   </option>
            <option value="HUF">  Terre Haute, IN (HUF)   </option>
            <option value="TEH">  Tetlin, AK (TEH)    </option>
            <option value="TXK">  Texarkana, AR (TXK) </option>
            <option value="TVF">  Thief River Falls, MN (TVF) </option>
            <option value="KTB">  Thorne Bay, AK (KTB)    </option>
           <option value="TUL">  Tulsa, OK (TUL) </option>
            <option value="TLT">  Tuluksak, AK (TLT)  </option>
            <option value="WTL">  Tuntutuliak, AK (WTL)   </option>
            <option value="TNK">  Tununak, AK (TNK)   </option>
            <option value="TUP">  Tupelo, MS (TUP)    </option>
            <option value="TCL">  Tuscaloosa, AL (TCL)    </option>
            <option value="TWF">  Twin Falls, ID (TWF)    </option>
            <option value="TWA">  Twin Hills, AK (TWA)    </option>
           <option value="EGE">  Vail, CO - Eagle County Airport (EGE)   </option>
            <option value="QBF">  Vail, CO - Van service (QBF)    </option>
            <option value="VDZ">  Valdez, AK (VDZ)    </option>
            <option value="VLD">  Valdosta, GA (VLD)  </option>
           <option value="WAA">  Wales, AK (WAA) </option>
            <option value="ALW">  Walla Walla, WA (ALW)   </option>
            <option value="WAS">  Washington DC - All airports (WAS)  </option>
            <option value="IAD">  Washington DC - Dulles (IAD)    </option>
            <option value="DCA">  Washington DC - National (DCA)  </option>
            <option value="KWF">  Waterfall, AK (KWF) </option>
            <option value="WWP">  Whale Pass, AK (WWP)    </option>
            <option value="WMO">  White Mountain, AK (WMO)    </option>
            <option value="LEB">  White River, VT (LEB)   </option>
             <option value="BDL">  Windsor Locks, CT (BDL) </option>
            <option value="ORH">  Worcester, MA (ORH) </option>
            <option value="WRL">  Worland, WY (WRL)   </option>
            <option value="WRG">  Wrangell, AK (WRG)  </option>
            <option value="YKM">  Yakima, WA (YKM)    </option>
            <option value="YAK">  Yakutat, AK (YAK)   </option>
            <option value="COD">  Yellowstone/Cody, WY (COD)  </option>
            <option value="YNG">  Youngstown, OH (YNG)    </option>
            <option value="YUM">  Yuma, AZ (YUM)  </option>
          </select>
        </td>
      </tr>
<!--      <tr>
        <td><label> To:</label></td>
        <td><input style="height: 25px;" type="text" id="External_FlightFareSearch_To" name="External_FlightFareSearch_To" size="13" /></td>
      </tr>-->
      <tr>
        <td>Class</td>
        <td><select name="External_FlightFareSearch_FlightClass">
            <option value="">-</option>
            <option selected="selected" value="Y">Economy</option>
            <option value="C">Business</option>
            <option value="F">First</option>
          </select></td>
      </tr>
      <tr>
        <td>Show only direct flights</td>
        <td><input type="checkbox" name="External_FlightFareSearch_OnlyDirectFlights" /></td>
      </tr>
      <tr>
        <td>Travel Date</td>
        <td><input id="demo1" class="dateparse" type="text" name="External_FlightFareSearch_DepartureDate" size="9" maxlength="10" /><a href="javascript:NewCal('demo1','ddmmyyyy')"><img src="images/cal.gif" border="0" alt="" /></a></td>
      </tr>
      <tr>
        <td>Return Date</td>
        <td><input id="demo2" class="dateparse" type="text" name="External_FlightFareSearch_ReturnDate" size="9" maxlength="10" /><a href="javascript:NewCal('demo2','ddmmyyyy')"><img src="images/cal.gif" border="0" alt="" /></a></td>
      </tr>
      <tr>
        <td>No of Adults:</td>
        <td><select name="External_FlightFareSearch_NumberOfAdults">
            <option value="0">0</option>
            <option selected="selected" value="1">1</option>
            <option value="2">2</option>
            <option value="more than 2">more than 2</option>
          </select></td>
      </tr>
      <tr>
        <td>No of Infants(0-2):</td>
        <td><select name="External_FlightFareSearch_NumberOfInfants">
            <option value="0">0</option>
            <option selected="selected" value="1">1</option>
            <option value="2">2</option>
            <option value="more than 2">more than 2</option>
          </select></td>
      </tr>
      <tr>
        <td>No of Children(2-12):</td>
        <td><select name="External_FlightFareSearch_NumberOfChilds">
            <option value="0">0</option>
            <option selected="selected" value="1">1</option>
            <option value="2">2</option>
            <option value="more than 2">more than 2</option>
          </select></td>
      </tr>
      <tr>
        <td> </td>
        <td><input class="btn btn-primary" type="submit" value="Search Flights" /></td>
      </tr>
    </tbody>
  </table>
</form>
