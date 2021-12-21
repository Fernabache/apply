
  // Get rid of small loading animation
  [...document.querySelectorAll(".input-location-dependant")].forEach(element =>
    element.classList.toggle("d-none")
  );



  // Function to set multiple attributes at once
  const setAttributes = (el, attrs) => {
    for (var key in attrs) {
      el.setAttribute(key, attrs[key]);
    }
  };


    const togglegrading = target => {
    	let country = target.value,
    	selectGRADINGOption = ["Select GRADING SCHEME..."],
    	gradingList ={
    		Afghanistan:[
    		"Secondary Level -Scale: 0-100",
    		"Other"
    		],
    		Albania:[
    		"Grade: A+-F",
    		"Scale: 0-10",
    		"Second Scale: 0-100",
    		"ECTS -Grade: A-F",
    		"Other"
    		],
    		Algeria:[
    		"Scale: 0-20",
    		"Other"
    		],
    		American_Samoa:[
    		"Other"
    		],
    		Andorra:[
    		"Other"
    		],
    		Angola:[
    		"Scale: 1-20",
    		"Other"
    		],
    		Anguilla:[
    		"Other"
    		],
    		Antarctica:[
    		"Other"
    		],
    		Antigua_and_Barbuda:[
    		"Caribbean Examinations Council(until June 1998)-Grade: I - V",
    		"Caribbean Examinations Council(after June 1998)-Grade: I - VI",
    		"Caribbean Advanced Proficiency Examination(CAPE - Grade: I-VII)",
    		"Standard University Level - Scale: A+-F",
    		"University Level -Engineering and Construction -Grade:A+-F",
    		"Standard University Level - Scale: 0-100",
    		"University Level -Engineering and Construction -Scal: 0-100",
    		"Other"
    		],
    		Argentina:[
    		"Grade: A-F",
    		"Scale: 0-10",
    		"Tertiary -Scale: 0-10",
    		"Other"
    		],
    		Armenia:[
    		"20-Point: 0-20",
    		"2-5 Point:0-5",
    		"10-Point: 0-10",
    		"ECTS -Grade:A-F",
    		"Other"
    		],
    		Aruba:[
    		"Grade: 0-10",
    		"Other"
    		],
    		Australia:[
    		"Grade: HD-N",
    		"New South Wales -Grade: HD-F",
    		"South Australia -Grade: HD-F2",
    		"Victoria -Grade: A-F",
    		"Western Australia -Grade: HD-E",
    		"Western Australia -Scale: 0-5",
    		"South Australia -Scale:0-7",
    		"Australian Capital Territory(ACT) -Secondary Scale: 0-100",
    		"Tasmania (Before 2003) -Grade 2-4",
    		"Western Australia -Second Scale: 0-100",
    		"Federal -Scale: 0-6",
    		"Second Scale: 0-100",
    		"Australian Capital Territory(ACT) -Scale: 0-5",
    		"Tasmania (After 2003) -Grade 2-4",
    		"Federal -Second Scale: 0-100",
    		"Scale: 0-7",
    		"Queensland -Scale: 0-7",
    		"Nothern Territory -Second Scale: 0-20",
    		"Nothern Territory -Scale: 0-5",
    		"New South Wales -Scale: 0-100",
    		"Common Post Secondary -Grade: HD-N",
    		"Australian Capital Territory(ACT) -Grade:A-E",
    		"Common Post Secondary -Scale: 0-7",
    		"Common Post Secondary -Second Scale: 0-100",
    		"Other"
    		],
    		Austria:[
    		"ECTS -Grade:A-F",
    		"Scale: 1-5",
    		"Other"
    		],
    		Azerbaijan:[
    		"Scale: 3-5",
    		"Second Scale: 60-100",
    		"Other"
    		],
    		Bahamas:[
    		"Grade:A-F",
    		"Scale: 0-100",
    		"Other"
    		],
    		Bahrain:[
    		"Grade:A-F",
    		"Scale: 0-100",
    		"Other"
    		],
    		Bangladesh:[
    		"Scale: 0-100",
    		"Other"
    		],
    		Barbados:[
    		"Caribbean Examination Council(Secondary Education before 1998) -Grade:I-V",
    		"Caribbean Examination Council(Secondary Education after 1998) -Grade:I-VI",
    		"Caribbean Advanced Proficiency Examination(CAPE) -Grade:I-VII",
    		"First Class Honours -Pass",
    		"University Level -Grade: A-E",
    		"University Level -Scale: 0-100",
    		"Other"
    		],
    		Belarus:[
    		"ECTS -Grade: A-F",
    		"Scale: 0-10",
    		"Belarusian State University(2004 to present) -Grade: 0-10",
    		"Other"
    		],
    		Belgium:[
    		"ECTS -Grade: A-F",
    		"Flemish -Scale: 0-20",
    		"French -Scale: 0-20",
    		"Other"
    		],
    		Belize:[
    		"Grade: A-F",
    		"Scale: 0-100",
    		"Secondary -Scale: 1-5",
    		"Other"
    		],
    		Benin:[
    		"Grade: A+-F",
    		"Scale: 0-20",
    		"Other"
    		],
    		Bermuda:[
    		"Other"
    		],
    		Bhutan:[
    		"Other"
    		],
    		Bolivia:[
    		"Letter Grade Scale: Pesimo-Excelente",
    		"Letter Grade Scale: Reprobado - Sobriesaliente",
    		"Scale: 0-7",
    		"Scale:0-70",
    		"Scale:0-100",
    		"Other"
    		],
    		Bosnia_and_Herzegovina:[
    		"ECTS -Grade: A-F",
    		"Scale: 0-5",
    		"10-Point Scale:5-10",
    		"Other"
    		],
    		Botswana:[
    		"Grade: A-F",
    		"Scale: 0-100",
    		"Other"
    		],
    		Bouvet_Island:[
    		"Other"
    		],
    		Brazil:[
    		"Letter Grade Scale: F to A",
    		"Letter Grade Scale: Deficiente to Excelente",
    		"Letter Grade Scale: D to E",
    		"Double Letter Grade: SR-SS",
    		"Scale: 0-10",
    		"Scale: 0-100",
    		"Other"
    		],
    		British_Indian_Ocean_Territory:[
    		"Other"
    		],
    		Brunei_Darussalam:[
    		"First Class Honour - Fail",
    		"University Brunei Darussalam -Grade: A-A",
    		"University Brunei Darussalam -Scale:0-100",
    		"Other",
    		],
    		Bulgaria:[
    		"ECTS -Grade: A-F",
    		"Scale: 2-6",
    		"Other"
    		],
    		Burkina_Faso:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Burma_Myarma:[
    		"Grade: 5-2",
    		"Scale: 0-100",
    		"Other"
    		],
    		Burundi:[
    		"Other"
    		],
    		Cambodia:[
    		"Grade: A-F",
    		"Second Scale: 0-10",
    		"Scale: 0-100",
    		"Other"
    		],
    		Cameroon:[
    		"French System: Insuffisant - Trés Bien",
    		"English System",
    		"GCE A-Level",
    		"French System: 0 - 20",
    		"University of Buea: 0 GP - 4 GP",
    		"University of Buea: 0 - 100",
    		"Other"
    		],
    		Canada:[
    		"Other"
    		],
    		Cape_Verde:[
    		"Portuguese - Grade: A-F",
    		"Portuguese - Scale: 0-20",
    		"Post-Secondary - Grade: A-F",
    		"Post-Secondary - Scale: 0-20",
    		"Other"
    		],
    		Cayman_Islands:[
    		"Other"
    		],
    		Central_African_Republic:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Chad:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Chile:[
    		"Scale: 0-7",
    		"Other"
    		],
    		China:[
    		"China Higher Education (0-100)",
    		"Other"
    		],
    		Christmas_Island:[
    		"Other"
    		],
    		Cocos_Islands:[
    		"Other"
    		],
    		Colombia:[
    		"Letter Grade 5 point Scale: Insuficiente - Excelente",
    		"Letter Grades Scale: Insuficiente - Muy Bueno",
    		"Scale: 0-10",
    		"Scale: 0-5",
    		"Other"
    		],
    		Comoros:[
    		"Other"
    		],
    		Congo:[
    		"Other"
    		],
    		Congo_The_Democratic_Republic_of_The:[
    		"Scale: 0-20",
    		"other"
    		],
    		Cook_Islands:[
    		"Other"
    		],
    		Costa_Rica:[
    		"Grade: S-I",
    		"Second Scale: 0-100",
    		"Scale: 0-10",
    		"Other"
    		],
    		Cote_D_ivoire:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Croatia:[
    		"ECTS - Grade: A-F",
    		"Scale: 1-5",
    		"Other"
    		],
    		Cuba:[
    		"100-Point - Grade: E-D",
    		"Scale: 0-5",
    		"100-Point - Scale: 0-100",
    		"Other"
    		],
    		Cyprus:[
    		"Turkish-Cypriot - Scale: 0-10",
    		"Greek-Cypriot - Second Scale: 0-20",
    		"Greek-Cypriot - Scale: 0-100",
    		"Other"
    		],
    		Czech_Republic:[
    		"ECTS - Grades: A-F",
    		"Scale: 1-5",
    		"Second Scale: 0-100",
    		"Other"
    		],
    		Denmark:[
    		"ECTS - Grade: A-F",
    		"7-Point - Scale: -3-12",
    		"13-Point - Grade: 0-13",
    		"Other"
    		],
    		Djibouti:[
    		"Other"
    		],
    		Dominica:[
    		"Grade: A+-D",
    		"Scale: 0-100",
    		"Other"
    		],
    		Dominican_Republic:[
    		"Grade: A+-F",
    		"Scale: 0-100",
    		"Other"
    		],
    		Ecuador:[
    		"10-Point - Scale: 0-10",
    		"20-Point - Scale: 0-20",
    		"20-Point Scale - Scale: 0-80",
    		"100- Point - Scale: 0-100",
    		"Other"
    		],
    		Egypt:[
    		"University Level Scale A - Grade: A-F",
    		"University Level Scale B - Grade: A-F	",
    		"University Level Scale C - Grade: A-F	",
    		"University Level Scale C - Scale: 0-100",
    		"University Level Scale A - Scale: 0-100",
    		"Other"
    		],
    		El_Salvador:[
    		"Grade: E-NM",
    		"Second Scale: 10-100",
    		"Scale: 0-10",
    		"Other"
    		],
    		Equatorial_Guinea:[
    		"Other"
    		],
    		Eritrea:[
    		"University Level - Grade: A-F",
    		"Other"
    		],
    		Estonia:[
    		"ECTS - Grade: A-F",
    		"5-Point - Scale: 1-5",
    		"Before 2000 6-Point - Grade: 0-5",
    		"After 2000 6-Point - Scale: 0-5",
    		"After 2000 6-Point - Second Scale: 0-100",
    		"Other"
    		],
    		Ethiopia:[
    		"University Level - Grade: A-F",
    		"Ethiopian Higher Education Entrance Qualification Certificate - Scale: 0-100",
    		"Other"
    		],
    		Falkland_Islands:[
    		"Other"
    		],
    		Faroe_Islands:[
    		"Other"
    		],
    		Fiji:[
    		"Grade: A-E",
    		"Scale: 0-100",
    		"Other"
    		],
    		Finland:[
    		"ECTS - A-F",
    		"10-Point - Scale: 4-10",
    		"5-Point - Scale: 1-5",
    		"5-Point - Grade: ET-VT",
    		"Other"
    		],
    		France:[
    		"Most Common - Grade: THF-E",
    		"ECTS - Grade: A-F",
    		"Most Common - Scale: 0-20	",
    		"Other"
    		],
    		French_Guiana:[
    		"Other"
    		],
    		French_Polynesia:[
    		"Other"
    		],
    		French_Southern_Territories:[
    		"Other"
    		],
    		Gabon:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Gambia:[
    		"Other"
    		],
    		Georgia:[
    		"ECTS - Grade: A-F",
    		"Pre-2007 - Grade: 3-5",
    		"7-Point Secondary - Scale: 1-7",
    		"10-Point Secondary - Scale: 4-10",
    		"Other"
    		],
    		Germany:[
    		"Primary & Lower Secondary (1st-10th) - Grade: 1-6",
    		"ECTS - Grade: A-F",
    		"Upper Secondary (Gymnasium, 11th-13th grade) - Scale: 0-15	",
    		"Primary & Lower Secondary (1st-10th) - Scale: 1-6",
    		"Tertiary (Hochschule & Universitat) - Scale: 1-6",
    		"Other"
    		],
    		Ghana:[
    		"Letter Grade Scale: 1st to 3rd class",
    		"West African Senior Secondary School Certificate - Letter Grade Scale: F9 - A1",
    		"Senior Secondary School Certificate Examination - Letter Grade Scale: Fail - Excellent	",
    		"West African Senior Secondary School Certificate - Letter Grade Scale: Fail - Excellent",
    		"General Certificate of Education - Letter Grade Scale: E - A",
    		"Senior Secondary School Certificate Examination - Scale: 1-5",
    		"Scale: 0-4	",
    		"West African Senior Secondary School Certificate - Scale: 0-100",
    		"West African Senior Secondary School Certificate - Scale: 1-9",
    		"Letter Grade Scale: 1st to 3rd class",
    		"General Certificate of Education - Letter Grade Scale: E - A",
    		"Letter Grade Scale: F - A",
    		"Scale: 0-100",
    		"Other"
    		],
    		Gibraltar:[
    		"Other"
    		],
    		Greece:[
    		"ECTS - Grade: A-F",
    		"National - Second Scale: 0-100",
    		"20-Point - Scale: 0-20",
    		"National - Scale: 0-10",
    		"Other"
    		],
    		Greenland:[
    		"Other"
    		],
    		Grenada:[
    		"CSEC (Caribbean Secondary Education Certificate) - Grade: I-VI",
    		"Other"
    		],
    		Guadeloupe:[
    		"Other"
    		],
    		Guam:[
    		"Other"
    		],
    		Guatemala:[
    		"Secondary School - Scale: 0-100",
    		"Other"
    		],
    		Guinea:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Guinea_bissau:[
    		"Other"
    		],
    		Guyana:[
    		"CSEC (CXC) - Grade: A-F",
    		"Grade: A-F",
    		"Other"
    		],
    		Haiti:[
    		"Secondary Scale: 0-100",
    		"Secondary Scale: 1-10",
    		"Scale: 0-100",
    		"Other"
    		],
    		Heard_Island_and_Mcdonald_Islands:[
    		"Other"
    		],
    		Holy_See:[
    		"Other"
    		],
    		Honduras:[
    		"Scale: 2-5",
    		"Second Scale: 0-100",
    		"Other"
    		],
    		Hong_Kong:[
    		"Grade: A+ - F",
    		"Hong Kong Certificate of Education Examination (HKCEE and HKALE) - Grade: A-F",
    		"Hong Kong Diploma of Secondary Education (HKDSE) - Category A",
    		"Hong Kong Diploma of Secondary Education (HKDSE) - Category B",
    		"Hong Kong Diploma of Secondary Education (HKDSE) - Category C",
    		"Other"
    		],
    		Hungary:[
    		"ECTS - Grade: A-F",
    		"Second Scale: 0-100",
    		"3-Point - Grade: 1-5",
    		"Scale: 1-5",
    		"Other"
    		],
    		Iceland:[
    		"ECTS - Scale: 0-10",
    		"Scale: 0-10",
    		"Other"
    		],
    		India:[
    		"Other (Indian: 0-100)",
    		"Polytechnic Diploma (10+3)",
    		"CBSE",
    		"State Boards",
    		"CISCE/ICSE",
    		"West Bengal Board",
    		"Letter Grade: Division/Class",
    		"Letter Grade: F to AA / A+",
    		"Letter Grade: Fail - Outstanding",
    		"Letter Grade Scale: F to O",
    		"Scale: 0-10",
    		"Scale: 0-100",
    		"Other"
    		],
    		Indonesia:[
    		"Secondary - Scale: 1-10",
    		"University Common - Grade: A-E",
    		"University Common - Scale: 0-4",
    		"Other"
    		],
    		Iran:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Iraq:[
    		"Scale: 0-100",
    		"Other"
    		],
    		Ireland:[
    		"Secondary School - Grade: A-F",
    		"School Leaving Certificate - Grade: A1-F",
    		"ECTS Grade: A-F",
    		"School Leaving Certificate - Scale: 0-100",
    		"Scale: 0-100",
    		"School Leaving Certificate Applied (LCA) - Scale: 60-100",
    		"Secondary School - Scale: 0-100",
    		"ECTS Grade: A-F",
    		"School Leaving Certificate Applied (LCA) - Scale: 60-100",
    		"Scale: 0-100",
    		"FETAC Levels 4-6 - Scale: 50-100",
    		"Other"
    		],
    		Israel:[
    		"Scale: 4-100",
    		"Second Scale: 0-10",
    		"Other"
    		],
    		Italy:[
    		"ECTS - Grade: A-F",
    		"100-Point - Scale: 0-100",
    		"Secondary School - Scale: 0-10",
    		"University Level - Scale: 0-30",
    		"Other"
    		],
    		Jamaica:[
    		"Letter Grade Scale: Class",
    		"Letter Grade - Secondary School: A to F",
    		"Letter Grade: A - F",
    		"Caribbean Examinations Council: Grade 1-6",
    		"Other"
    		],
    		Japan:[
    		"International - Grade: A-D-",
    		"Post-Secondary - Grade: S-F",
    		"4-Scale University - Grade: A-F",
    		"Post-Secondary - Scale: 0-100",
    		"4-Scale University - Scale: 0-100",
    		"Other"
    		],
    		Jordan:[
    		"Grade: A-F",
    		"Scale: 0-100",
    		"Al-Isra University - Scale: 0-100",
    		"Other"
    		],
    		Kazakhstan:[
    		"ECTS - Grade: A-F",
    		"Grade: 3-5",
    		"Other"
    		],
    		Kenya:[
    		"Grade: A-F",
    		"Secondary Level - Grade: A-E",
    		"KCSE (Kenya Certificate of Secondary Education) - Scale: 0-100",
    		"Secondary Level - Scale: 1-12",
    		"Scale: 0-100",
    		"University - Grade: A-E",
    		"University - Scale: 0-100",
    		"Other"
    		],
    		Kiribati:[
    		"Other"
    		],
    		Korea_North:[
    		"Other"
    		],
    		Korea_South:[
    		"Other"
    		],
    		Kuwait:[
    		"Letter Grade Scale: Distinction to Satisfactory",
    		"Letter Grade Scale: F to A	",
    		"Grade: A-F	",
    		"Scale: 0-100",
    		"Other"
    		],
    		Kyrgyzstan:[
    		"Scale: 2-5",
    		"Other"
    		],
    		Lao:[
    		"Other"
    		],
    		Latvia:[
    		"ECTS - Grade: A-F",
    		"Scale: 0-10",
    		"Other"
    		],
    		Lebanon:[
    		"Scale: 0-20",
    		"University Level - Grade: A-F",
    		"University Level - Scale: 0-100",
    		"Other"
    		],
    		Lesotho:[
    		"First Class - Pass",
    		"Other"
    		],
    		Liberia:[
    		"West African Senior Secondary School Certificate Examination (WASSSCE) - Grade: A1-F9",
    		"West African Senior Secondary School Certificate Examination (WASSSCE) - Scale: 1-9",
    		"Scale: 0-100",
    		"Other"
    		],
    		Libyan:[
    		"Scale: 0-100",
    		"University of Benghazi - Grade: AA-F",
    		"Other"
    		],
    		Liechtenstein:[
    		"Other"
    		],
    		Lithuania:[
    		"ECTS - Grade: A-F",
    		"10-Point - Scale: 1-10",
    		"100-Point - Scale: 0-100",
    		"Other"
    		],
    		Luxembourg:[
    		"ECTS - Grade: A-F",
    		"Scale: 0-20",
    		"Secondary School - Scale: 1-60",
    		"Other"
    		],
    		Macao:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Macedonia:[
    		"Scale: 0-20",
    		"Secondary School Level - Scale: 1-5",
    		"University Level - Scale: 5-10",
    		"Other"
    		],
    		Madagascar:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Malawi:[
    		"First Class Honours - Pass",
    		"Other"
    		],
    		Malaysia:[
    		"Scale: 0-100",
    		"Malaysian Certificate of Education - Scale: 1-9",
    		"International - Scale: 0-100",
    		"Grade: A-F",
    		"International - Grade: A-F",
    		"International - Scale: 0-100",
    		"Scale: 0-100",
    		"University Level - Grade: A+-F",
    		"University Level - Scale: 0-100",
    		"Other"
    		],
    		Maldives:[
    		"Other"
    		],
    		Mali:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Malta:[
    		"Grade: A-F",
    		"Scale: 0-100",
    		""
    		],
    		Marshall_Islands:[
    		"Other"
    		],
    		Martinique:[
    		"Other"
    		],
    		Mauritania:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Mauritius:[
    		"First Class Honours - Pass",
    		"Other"
    		],
    		Mayotte:[
    		"Other"
    		],
    		Mexico:[
    		"Letter Grades: No Acreditada/Reprobado - Excelente/Muy Bien",
    		"Secondary/Tertiary with 7 or 70 as passing - Second Scale: 0-10",
    		"Secondary/Tertiary with 6 or 60 as passing - Second Scale: 0-10",
    		"Scale: 0-10",
    		"Secondary/Tertiary with 7 or 70 as passing - Scale: 0-100",
    		"Scale: 0-100",
    		"Secondary/Tertiary with 6 or 60 as passing - Scale: 0-100",
    		"Other"
    		],
    		Micronesia:[
    		"Other"
    		],
    		Moldova:[
    		"Scale: 1-10",
    		"Other"
    		],
    		Monaco:[
    		"Other"
    		],
    		Mongolia:[
    		"1998 to Present - Grade: A-F",
    		"Before 1998 - Grade: 2-5",
    		"1998 to Present - Scale: 0-100",
    		"Other"
    		],
    		Montserrat:[
    		"Other"
    		],
    		Morocco:[
    		"Letter Grade Scale: Moyen - Très Bien",
    		"Scale: 0-20",
    		"Other"
    		],
    		Mozambique:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Myanmar:[
    		"Other"
    		],
    		Namibia:[
    		"IGCSE Scale - Grade: A*-U",
    		"IGCSE Scale - Scale: 0-100",
    		"University - Grade: A-F",
    		"University -Scale: 0-100",
    		"Other"
    		],
    		Nauru:[
    		"Other"
    		],
    		Nepal:[
    		"Division: I - III",
    		"Scale 0-100",
    		"Other",
    		"Grade: Failure - Outstanding",
    		"Letter Grade: A - F"
    		],
    		Netherlands:[
    		"Scale: 0-10",
    		"ECTS - Grade: A-F",
    		"Other"
    		],
    		Netherlands_Antilles:[
    		"Other"
    		],
    		New_Caledonia:[
    		"Other"
    		],
    		New_Zealand:[
    		"Secondary 2004-Present - Grade: E-NA",
    		"Secondary 1993-2004 - Grade: A-E",
    		"Secondary 1987-1992 - Grade: A1-D",
    		"Secondary before 1986 - Grade: A-C",
    		"Secondary 1987-1992 - Scale: 0-100	",
    		"Secondary before 1986 - Scale: 50-100",
    		"Secondary 2004-Present - Scale: 0-10",
    		"Secondary 1993-2004 - Scale: 0-100",
    		"Post-Secondary - Grade: A+-F",
    		"Post-Secondary - Scale: 0-100",
    		"Other"
    		],
    		Nicaragua:[
    		"Scale: 0-100",
    		"Other"
    		],
    		Niger:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Nigeria:[
    		"Letter Grade Scale: F to A",
    		"Letter Grade Scale: First to Third Class",
    		"Letter Grade Scale: Class 1 to 5",
    		"West African Senior School Certificate: Fail to Excellent",
    		"General Certificate of Education Scale: E to A",
    		"National Examinations Council (NECO) Senior School Certificate: A1 to F9",
    		"Scale: 0-100",
    		"Numerical West African Senior School Certificate (WASSCE) - Scale: 0-9",
    		"",
    		"Other"
    		],
    		Niue:[
    		"Other"
    		],
    		Norfolk_Island:[
    		"Other",
    		],
    		Northern_Mariana_Islands:[
    		"Other"
    		],
    		Norway:[
    		"ECTS Grade: A-F-",
    		"Post-Secondary (Pre-2002) - Grade: A-F",
    		"Post-Secondary (Pre-2002) - Scale: 1-6",
    		"Other"
    		],
    		Oman:[
    		"Scale: 0-100",
    		"Other"
    		],
    		Pakistan:[
    		"Secondary - Grade: A1-E",
    		"Letter Grade - Grade: A-F",
    		"Letter Grade - Scale: 0-100",
    		"General Scale: 0-100",
    		"Secondary - Scale: 0-100",
    		"Indigenous Grade Scale - Scale: 0-100",
    		"Other"
    		],
    		Palau:[
    		"Other"
    		],
    		Palestinian_Territory:[
    		"Other"
    		],
    		Panama:[
    		"Scale: 0-100",
    		"Other"
    		],
    		Papua_New_Guinea:[
    		"First Class Honours - Pass",
    		"Other"
    		],
    		Paraguay:[
    		"Scale: 1-5",
    		"10-Point - Scale: 0-10",
    		"Other"
    		],
    		Peru:[
    		"Grade: A-F",
    		"Second Scale: 0-100",
    		"Scale: 0-20",
    		"Other"
    		],
    		Philippines:[
    		"Secondary (Philippine Science High School System) - Scale: 1-5	",
    		"Secondary (Philippine Science High School System) - Scale: 0-100	",
    		"Quezon City Polytechnic University - Second Scale: 0-100",
    		"Polytechnic University of the Philippines - Scale: 1-5	",
    		"Polytechnic University of the Philippines - Second Scale: 0-100",
    		"De La Salle University - Scale: 1-4",
    		"Most Common Tertiary - Scale: 1-5",
    		"Most Common Tertiary - Second Scale: 0-100	",
    		"Pamantasan ng Lungsod ng Valenzuela University - Scale: 1-5",
    		"De La Salle University - Second Scale: 0-100",
    		"Pamantasan ng Lungsod ng Valenzuela University - Scale: 0-100",
    		"Other"
    		],
    		Pitcairn:[
    		"Other"
    		],
    		Poland:[
    		"Grade: 2-5+",
    		"ECTS - Grade: A-FX",
    		"Secondary - Grade: 1-6",
    		"Scale: 1-5.5",
    		"Other"
    		],
    		Portugal:[
    		"ECTS - Grade: A-F",
    		"Most Common - Scale: 1-20",
    		"Other"
    		],
    		Puerto_Rico:[
    		"Other"
    		],
    		Qatar:[
    		"Letter Grade Scale: Fail to Excellent",
    		"Scale: 0-5",
    		"Letter Grade Scale: A to F",
    		"University Level - Grade: A-F",
    		"University Level - Scale: 0-100",
    		"Scale: 0-100",
    		"Other"
    		],
    		Reunion:[
    		"Other"
    		],
    		Romania:[
    		"ECTS - Grade: A-F",
    		"Scale: 0-10",
    		"Other"
    		],
    		Russian_Federatio:[
    		"ECTS - Grade: A-F",
    		"Scale: 2-5",
    		"Other"
    		],
    		Rwanda:[
    		"Grade: A-D",
    		"Second Scale: 40-100",
    		"Scale: 1.5-11",
    		"Other"
    		],
    		Saint_Helena:[
    		"Other"
    		],
    		Saint_Kitts_and_Nevis:[
    		"Other"
    		],
    		Saint_Lucia:[
    		"Other"
    		],
    		Saint_Pierre_and_Miquelon:[
    		"Other"
    		],
    		Saint_Vincent_and_The_Grenadines:[
    		"Other"
    		],
    		Samoa:[
    		"Institute of Higher Education - Grade: A1-E",
    		"Institute of Technology - Grade: A+-F",
    		"Institute of Higher Education - Scale: 0-100",
    		"Institute of Technology - Scale: 0-100",
    		"Other"
    		],
    		San_Marino:[
    		"Other"
    		],
    		Sao_Tome_and_Principe:[
    		"Other"
    		],
    		Saudi_Arabia:[
    		"Secondary - Grade: A-F",
    		"5-Point Grading Scale Grade: A+-W",
    		"Secondary - Scale: 0-100",
    		"5-Point Grading Scale - Scale: 0-100",
    		"5-Point Grading Scale - Scale: 0-5",
    		"University Level (After Spring 1996) - Grade: A+-F	",
    		"University Level (Before Spring 1996) - Grade: A-F	",
    		"University Level (Before Spring 1996) - Scale: 0-100",
    		"University Level (After Spring 1996) - Scale: 0-100",
    		"Other"
    		],
    		Senegal:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Serbia_and_Montenegro:[
    		"ECTS - Grade: A-F",
    		"Secondary - Scale: 1-5",
    		"Other"
    		],
    		Seychelles:[
    		"Other"
    		],
    		Sierra_Leone:[
    		"First Class Honours - Pass",
    		"Other"
    		],
    		Singapore:[
    		"Singapore-Cambridge GCE “O” Level Examination - Grade: A1-E9",
    		"Secondary 9-Point - Grade: A1-F9",
    		"Secondary Letter Grade - Grade: A+-F",
    		"Grade: A+-F",
    		"Polytechnic - Grade: AD-F",
    		"Secondary 9-Point - Second Scale: 0-100",
    		"Scale: 0-100",
    		"Secondary Letter Grade - Scale: 0-100",
    		"Secondary 9-Point - Scale: 1-9	",
    		"Polytechnic - 4 points CGPA",
    		"Junior College - Grade: A-F",
    		"University Level - Grade: I-III",
    		"Junior College - Scale: 0-100",
    		"University Level - Scale: 0-100",
    		"Other"
    		],
    		Slovakia:[
    		"Other"
    		],
    		Slovenia:[
    		"ECTS Grade: A-F-",
    		"Secondary - Scale: 0-100",
    		"Secondary - Grade: 1-5",
    		"University - Scale: 1-10",

    		],
    		Solomon_Islands:[
    		"Other"
    		],
    		Somalia:[
    		"Grade: A-F",
    		"Grade: A-F",
    		"Scale: 1-5",
    		"Second Scale: 0-100",
    		"Other"
    		],
    		South_Africa:[
    		"Secondary (Pre-2008) - Grade: A-I",
    		"Secondary (Post-2008) - Grade: 1-7",
    		"Secondary (Post-2008) - Scale: 20-100",
    		"Secondary (Pre-2008) - Scale: 0-100",
    		"Higher Education - Scale: 0-100",
    		"Other"
    		],
    		South_Georgia_and_The_South_Sandwich_Islands:[
    		"Other"
    		],
    		South_Sudan:[
    		"Other"
    		],
    		Spain:[
    		"ECTS - Grade: A-F",
    		"Secondary School - Scale: 0-10",
    		"10-Point University - Scale: 0-10",
    		"4-Point University - Scale: 0-4",
    		"Other"
    		],
    		Sri_Lanka:[
    		"G.C.E Ordinary Level Examination - Grade: A-W",
    		"G.C.E Ordinary Level Examination (old) - Grade: D-F	",
    		"G.C.E Advanced Level Exam - Grade: A-F	",
    		"G.C.E Ordinary Level Examination (old) - Scale: 0-100",
    		"G.C.E Advanced Level Exam - Scale: 0-100",
    		"G.C.E Ordinary Level Examination - Scale: 0-100",
    		"University Level - Grade: A-E",
    		"University Level - Scale: 0-100",
    		"Other"
    		],
    		Sudan:[
    		"Sudan Secondary School Certificate (SSSC) - Scale: 0-100	",
    		"University Level - Grade: A-F",
    		"University Level - Scale: 0-100",
    		"Other"
    		],
    		Suriname:[
    		"Other"
    		],
    		Svalbard_and_Jan_Mayen:[
    		"Other"
    		],
    		Swaziland:[
    		"Grade: A-D",
    		"Other"
    		],
    		Sweden:[
    		"Secondary Level (1996-2012) - Grade: MVG-U	",
    		"Secondary School as of June 2014 - Grade: A-F	",
    		"ECTS - Grade: A-F	",
    		"Secondary Level (1996-2012) - Scale: 0-100	",
    		"Five-Point Scale - Scale: 1-5	",
    		"Most Common University - Grade: VG-U",
    		"Most Common University - Scale: 0-100	",
    		"Other"
    		],
    		Switzerland:[
    		"ECTS - Grade: A-F",
    		"10-Point - Scale: 0-10",
    		"5-Point - Scale: 1-5",
    		"6-Point - Scale: 0-6",
    		"Other"
    		],
    		Syrian_Arab_Republic:[
    		"Other"
    		],
    		Taiwan:[
    		"Primary and Junior High School - Grade: A+ - F	",
    		"Secondary and Tertiary (50 minimum pass) - Scale: 0-100",
    		"Primary and Junior High School - Scale: 0-100",
    		"Secondary and Tertiary (50 minimum pass) - Scale: 0-100",
    		"Tertiary (60 minimum pass) - Scale: 0-100",
    		"Other"
    		],
    		Tajikistan:[
    		"ECTS - Grade: A-F",
    		"Scale: 2-5",
    		"Other"
    		],
    		Tanzania:[
    		"5-Point - Grade: A-F",
    		"First Class Honours - Pass",
    		"5-Point - Scale: 0-5",
    		"Other"
    		],
    		Thailand:[
    		"Grade: A-F",
    		"4-Point - Grade: F-4",
    		"4-Point - Scale: 0-100",
    		"Other"
    		],
    		Timor_leste:[
    		"Other"
    		],
    		Togo:[
    		"Scale: 8-20",
    		"Other"
    		],
    		Tokelau:[
    		"Other"
    		],
    		Tonga:[
    		"Other"
    		],
    		Trinidad_and_Tobago:[
    		"Other"
    		],
    		Tunisia:[
    		"Scale: 0-20",
    		"Other"
    		],
    		Turkey:[
    		"Most Common I - Grade: AA-FF",
    		"Secondary School - Grade: A-F",
    		"Secondary School - Scale: 0-5",
    		"Most Common I - Scale: 0-100",
    		"Most Common II - Scale: 0-100",
    		"Secondary School - Second Scale: 0-100	",
    		"10-Point - Scale: 1-10	",
    		"Istanbul Technical University - Grade: AA-FF",
    		"Istanbul Technical University - Scale: 0-100",
    		"Other"
    		],
    		Turkmenistan:[
    		"Other"
    		],
    		Turks_and_Caicos_Islands:[
    		"Other"
    		],
    		Tuvalu:[
    		"Other"
    		],
    		Uganda:[
    		"9-Point - Grade: A-F",
    		"First Class Honours - Pass",
    		"9-Point - Scale: 1-9",
    		"Post-Secondary - Grade: A+-F",
    		"Post-Secondary - Scale: 0-100",
    		"Other"
    		],
    		Ukraine:[
    		"Letter Grade Scale: Excellent to Pass",
    		"Scale: 0-100",
    		"Scale: 2-5",
    		"Scale: 0-12",
    		"Other"
    		],
    		United_Arab_Emirates:[
    		"Other"
    		],
    		United_Kingdom:[
    		"GCE Advanced Level (2010-Present) - Grade: A- n/a",
    		"GCSE (1994-Present) - Grade: A- n/a",
    		"IGCSE - Grade: A- n/a",
    		"ECTS - Grade: A-F",
    		"Scale: 0-100",
    		"Other"
    		],
    		United_States:[
    		"Other"
    		],
    		United_States_Minor_Outlying_Islands:[
    		"Other"
    		],
    		Uruguay:[
    		"Other"
    		],
    		Uzbekistan:[
    		"Other"
    		],
    		Vanuatu:[
    		"Other"
    		],
    		Venezuela:[
    		"Other"
    		],
    		Viet_Nam:[
    		"10-Point - Scale: 0-10",
    		"40-Point - Scale: 0-40",
    		"Alternative University - Grade: A+-F",
    		"Vietnam Higher Education (0-10)",
    		"Alternative University - Scale: 0-4",
    		"Alternative University - Second Scale: 0-100",
    		"Alternative University - Second Scale: 0-100",
    		"Other"
    		],
    		Virgin_Islands_British:[
    		"Other"
    		],
    		Virgin_Islands_US:[
    		"Other"
    		],
    		Wallis_and_Futuna:[
    		"Other"
    		],
    		Western_Sahara:[
    		"Other"
    		],
    		Yemen:[
    		"Other"
    		],
    		Zambia:[
    		"Other"
    		],
    		Zimbabwe:[
    		"Scale: A - U",
    		"Distinction - Unsatisfactory",
    		"Scale: A+ to E",
    		"Distinction - Worthless",
    		"Other"
    		]
			}[country],
			grading_schemes = [...selectGRADINGOption,...Object.values(gradingList)],
			form = target.parentElement.parentElement.parentElement.parentElement,
			gradingSelect = form.querySelector(".select-grading-scheme"),
			length = gradingSelect.options.length;

			 // Clear LGS select element
		    for (i = length - 1; i >= 0; i--) {
		      gradingSelect.options[i] = null;
		    }

		      // Populate LGA select element
		    grading_schemes.forEach(grading_scheme => {
		      let opt = document.createElement("option");                                     // Create option element
		      opt.appendChild(document.createTextNode(grading_scheme));                                  // Append LGA to it
		      opt.value = grading_scheme;  

		          // Make option asking you to select unclickable
     		 grading_scheme.includes("elect")
        	? setAttributes(opt, { disabled: "disabled", selected: "selected" })
        	: "";

        	  // Add this option element to LGA select element
     		 gradingSelect.appendChild(opt);

     		 	 });

    };