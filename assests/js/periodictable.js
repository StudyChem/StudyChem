
// properties  with units which will be shown when checkbox "Basicinfo" will be checked
var properties = new Array("Atomic Number","Mass Number","Group No.","Atomic Mass");
var units= new Array(null, null,null, "g/mol"); 
// properties  with units which will be shown when checkbox "Atomic Structure" will be checked
var properties1 =new Array("Electronic Configuration","Valence Electrons","State","Melting Point","Boiling Point");
var units1= new Array(null,null,null,"K","K"); 
     
     
    var Table = new Array(4);

	//properties are entered in order symbol,atomic no.,group no.,atomic mass,electronic configuration,
	//valence electrons,state,Melting Point,Boiling Point,Element,type

    Table["H"] = new Array("H",1,1,"1 (IA)",1.0079,"(1) 1s<sup>1</sup>",1,"Gas",14.025,20.268,"Hydrogen","Non Metal");
    Table["He"] = new Array("He",2,4,"18(VIIIA)",4.0026,"1s<sup>2</sup>",2,"Gas",0.95,4.215,"Helium","Noble Gas","Non Metal");
    Table["Li"] = new Array("Li",3,7,"1 (IA)",6.941,"1s2&middot;2s1",1,"Solid",453.7,1615,"Lithium","Alkali Metals"); 
    
  // Table["Hg"] = new Array("Hg",80,202,"12 (IIB)",200.59,"","","Liquid",234.28,630,"Mercury","Transition Metals");
   Table["Be"] = new Array("Be",4,9,"2 (IIA)","1s2&middot;2s2",2,"Solid",1560,2745,"Beryllium","Alkali Earth Metals");
    Table["B"] = new Array("B",5,11,"13 (IIIA)",10.81,"1s2&middot;2s2&middot;2p1",3,"Solid",2300,4275,"Boron","Metalloids");
    Table["C"] = new Array("C",6,12,"14 (IVA)",12.011,"1s2&middot;2s2&middot;2p2",4,"Solid",4100,4470,"Carbon","Non Metal");
    Table["N"] = new Array("N",7,14,"15 (VA)",14.0067,"1s2&middot;2s2&middot;2p3",5,"Gas",63.14,77.35,"Nitrogen","Strong Acid","Non Metal");
    Table["O"] = new Array("O",8,16,"16 (VIA)",15.9994,"1s2&middot;2s2&middot;2p4",6,"Gas",50.35,90.18,"Oxygen","Non Metal","Neutral");
    Table["F"] = new Array("F",9,19,"17 (VIIA)",18.998403,"1s2&middot;2s2&middot;2p5",7,"Gas",53.48,84.95,"Fluorine","Strong Acid","Halogen","Non Metal");
    Table["Ne"] = new Array("Ne",10,20,"18 (VIIIA)",20.179,"1s2&middot;2s2&middot;2p6",8,"Gas",24.553,27.096,"Neon","Noble Gas","Non Metal");
    Table["Na"] = new Array("Na",11,23,"1 (IA)",22.98977,"[Ne]3s1",1,"Solid",371,1156,"Sodium","Alkali Metals","Strong Base");
    Table["Mg"] = new Array("Mg",12,24,"2 (IIA)",24.305,"[Ne]3s2",2,"Solid",922,1363,"Magnesium","Alkali Earth Metals","Hexagonal","Strong Base");
    Table["Al"] = new Array("Al",13,27,"13 (IIIA)",26.98154,"[Ne]3s2&middot;3p1",3,"Solid",933.25,2740,"Aluminum","Amphoteric","","PostTransitionElement");
    Table["Si"] = new Array("Si",14,28,"14 (IVA)",28.0855,"[Ne]3s2&middot;3p2",4,"Solid",1685,3540,"Silicon","Amphoteric","Metalloids");
    Table["P"] = new Array("P",15,31,"15 (VA)",30.97376,"[Ne]3s2&middot;3p3",5,"Solid",317.3,550,"Phosphorus","Mild Acid","Non Metal");
    Table["S"] = new Array("S",16,32,"16 (VIA)",32.06,"[Ne]3s2&middot;3p4",6,"Solid",388.36,717.75,"Sulfur","Non Metal","Strong Acid");
    Table["Cl"] = new Array("Cl",17,35,"17 (VIIA)",35.453,"[Ne]3s2&middot;3p5",7,"Gas",172.16,239.1,"Chlorine","Halogen","Orthorhombic","Strong Acid","Non Metal");
    Table["Ar"] = new Array("Ar",18,40,"18 (VIIIA)",39.948,"[Ne]3s2&middot;3p6",8,"Gas",83.81,87.3,"Argon","Noble Gas","Non Metal");
    Table["K"] = new Array("K",19,39,"1 (IA)",39.0983,"[Ar]4s1",1,"Solid",336.35,1032,"Potassium","Alkali Metals","Strong Base");
    Table["Ca"] = new Array("Ca",20,40,"2 (IIA)",40.08,"[Ar]4s2",2,"Solid",1112,1757,"Calcium","Alkali Earth Metals","Strong Base");
    
	//valenceelectrons to be written after that
	Table["Sc"] = new Array("Sc",21,45,"3 (IIIB)",44.9559,"[Ar]3d1&middot;4s2",2,"Solid",1812,3104,"Scandium","Transition Metals","Weak Base");
    Table["Ti"] = new  Array("Ti",22,48,"4 (IVB)",47.9,"[Ar]3d2&middot;4s2",2,"Solid",1943,3562,"Titanium","Transition Metals","Amphoteric");
    Table["V"] = new Array("V",23,51,"5 (VB)",50.9415,"[Ar]3d3&middot;4s2",2,"Solid",2175,3682,"Vanadium","Transition Metals");
    Table["Cr"] = new Array("Cr",24,52,"6 (VIB)",51.996,"[Ar]3d5&middot;4s1",1,"Solid",2130,2945,"Chromium","Transition Metals","Strong Acid");
    Table["Mn"] = new Array("Mn",25,55,"7 (VIIB)",54.938,"[Ar]3d5&middot;4s2",2,"Solid",1517,2335,"Manganese","Transition Metals","Strong Acid");
    Table["Fe"] = new Array("Fe",26,56,"8 (VIII)",55.847,"[Ar]3d6&middot;4s2",2,"Solid",1809,3135,"Iron","Transition Metals");
    Table["Co"] = new Array("Co",27,59,"9 (VIII)",58.9332,"[Ar]3d7&middot;4s2",2,"Solid",1768,3201,"Cobalt","Transition Metals");
    Table["Ni"] = new Array("Ni",28,58,"10 (VIII)",58.7,"[Ar]3d8&middot;4s2",2,"Solid",1726,3187,"Nickel","Transition Metals","Mild Base");
    Table["Cu"] = new Array("Cu",29,63,"11 (IB)",63.546,"[Ar]3d10&middot;4s1",1,"Solid",1357.6,2836,"Copper","Transition Metals","Mild Base");
    Table["Zn"] = new Array("Zn",30,64,"12 (IIB)",65.38,"[Ar]3d10&middot;4s2",2,"Solid",692.73,1180,"Zinc","Transition Metals");
    Table["Ga"] = new Array("Ga",31,69,"13 (IIIA)",69.72,"[Ar]3d10&middot;4s2&middot;4p1",3,"Liquid",302.9,2478,"Gallium","Amphoteric","PostTransitionElement");
    Table["Ge"] = new Array("Ge",32,74,"14 (IVA)",72.59,"[Ar]3d10&middot;4s2&middot;4p2",4,"Solid",1210.4,3107,"Germanium","Amphoteric","Metalloids");
    Table["As"] = new Array("As",33,75,"15 (VA)",74.9216,"[Ar]3d10&middot;4s2&middot;4p3",5,"Solid",1091,886,"Arsenic","Rhombohedral","Metalloids","Mild Acid");
    Table["Se"] = new Array("Se",34,80,"16 (VIA)",78.96,"[Ar]3d10&middot;4s2&middot;4p4",6,"Solid",494,958,"Selenium","Hexagonal","Strong Acid","Non Metal");
    Table["Br"] = new Array("Br",35,79,"17 (VIIA)",79.904,"[Ar]3d10&middot;4s2&middot;4p5",7,"Liquid",265.9,332.25,"Bromine","Halogen","Orthorhombic","Strong Acid","Non Metal");
    Table["Kr"] = new Array("Kr",36,84,"18 (VIIIA)",83.8,"[Ar]3d10&middot;4s2&middot;4p6",8,"Gas",115.78,119.8,"Krypton","Noble Gas","Non Metal");
    Table["Rb"] = new Array("Rb",37,85,"1 (IA)",85.4678,"[Kr]5s1",1,"Solid",312.64,961,"Rubidium","Alkali Metals","Strong Base");
    Table["Sr"] = new Array("Sr",38,88,"2 (IIA)",87.62,"[Kr]5s2",2,"Solid",1041,1650,"Strontium","Alkali Earth Metals","Strong Base");
    Table["Y"] = new Array("Y",39,89,"3 (IIIB)",88.9059,"[Kr]4d1&middot;5s2",2,"Solid",1799,3611,"Yttrium","Transition Metals","Hexagonal","Weak Base");
    Table["Zr"] = new Array("Zr",40,90,"4 (IVB)",91.22,"[Kr]4d2&middot;5s2",2,"Solid",2125,4682,"Zirconium","Transition Metals","Hexagonal","Amphoteric");
    Table["Nb"] = new Array("Nb",41,93,"5 (VB)",92.9064,"[Kr]4d4&middot;5s1",1,"Solid",2740,5017,"Niobium","Transition Metals","Mild Acid");
    Table["Mo"] = new Array("Mo",42,98,"6 (VIB)",95.94,"[Kr]4d5&middot;5s1",1,"Solid",2890,4912,"Molybdenum","Transition Metals","Strong Acid");
    Table["Tc"] = new Array("Tc",43,98,"7 (VIIB)",98,"[Kr]4d5&middot;5s2","","Solid",2473,4538,"Technetium","Transition Metals","Synthetic","Hexagonal","Strong Acid","Radioactive");
    // find out correct group of following elements
	
	Table["Ru"] = new Array("Ru",44,102,"8 (VIII)",101.07,"[Kr]4d7&middot;5s1",1,"Solid",2523,4423,"Ruthenium","Transition Metals","Hexagonal","Mild Acid");
    Table["Rh"] = new Array("Rh",45,103,"9 (VIII)",102.9055,"[Kr]4d8&middot;5s1",1,"Solid",2236,3970,"Rhodium","Transition Metals","Amphoteric");
    Table["Pd"] = new Array("Pd",46,106,"10 (VIII)",106.4,"[Kr]4d10",18,"Solid",1825,3237,"Palladium","Transition Metals","Mild Base");
    Table["Ag"] = new Array("Ag",47,107,"11 (IB)",107.868,"[Kr]4d10&middot;5s1",1,"Solid",1234,2436,"Silver","Transition Metals","Amphoteric");
    Table["Cd"] = new Array("Cd",48,114,"12 (IIB)",112.41,"[Kr]4d10&middot;5s2",2,"Solid",594.18,1040,"Cadmium","Transition Metals","Hexagonal","Mild Base");
    Table["In"] = new Array("In",49,115,"13 (IIIA)",114.82,"[Kr]4d10&middot;5s2&middot;5p1",3,"Solid",429.76,2346,"Indium","Tetragonal","Amphoteric","","PostTransitionElement");
   
	Table["Sn"] = new Array("Sn",50,120,"14 (IVA)",118.69,"[Kr]4d10&middot;5s2&middot;5p2",4,"Solid",505.06,2876,"Tin","Tetragonal","Amphoteric","PostTransitionElement");
    Table["Sb"] = new Array("Sb",51,121,"15 (VA)",121.75,"[Kr]4d10&middot;5s2&middot;5p3",5,"Solid",904,1860,"Antimony","Rhombohedral","Metalloids","Mild Acid");
    Table["Te"] = new Array("Te",52,130,"16 (VIA)",127.6,"[Kr]4d10&middot;5s2&middot;5p4",6,"Solid",722.65,1261,"Tellurium","Chalcogen","Hexagonal","Metalloids","Mild Acid");
    Table["I"] = new Array("I",53,127,"17 (VIIA)",126.9045,"[Kr]4d10&middot;5s2&middot;5p5",7,"Solid",386.7,458.4,"Iodine","Halogen","Orthorhombic","Strong Acid","Non Metal");
    Table["Xe"] = new Array("Xe",54,132,"18 (VIIIA)",131.3,"[Kr]4d10&middot;5s2&middot;5p6",8,"Gas",161.36,165.03,"Xenon","Noble Gas","Weak Acid","Non Metal");
    Table["Cs"] = new Array("Cs",55,133,"1 (IA)",132.9054,"[Xe]6s1",1,"Liquid",301.55,944,"Cesium","Alkali Metals","Strong Base");
    Table["Ba"] = new Array("Ba",56,138,"2 (IIA)",137.33,"[Xe]6s2",2,"Solid",1002,2171,"Barium","Alkali Earth Metals","Strong Base");
    
    //Lanthenides elements
    Table["La"] = new Array("La",57,139,"",138.9055,"[Xe]5d1&middot;6s2",2,"Solid",1193,3730,"Lanthanum","Rare Earth Metals","Hexagonal","Strong Base","Lanthanide");
   
	
	Table["Ce"] = new Array("Ce",58,140,"",140.12,"[Xe]4f1&middot;5d1&middot;6s2",2,"Solid",1071,3699,"Cerium","Rare Earth Metals","Lanthanide","Fcc","Mild Base");
    Table["Pr"] = new Array("Pr",59,141,"",140.9077,"[Xe]4f3&middot;6s2",2,"Solid",1204,3785,"Praseodymium","Rare Earth Metals","Lanthanide","Hexagonal","Mild Base");
    Table["Nd"] = new Array("Nd",60,142,"",144.24,"[Xe]4f4&middot;6s2",2,"Solid",1289,3341,"Neodymium","Rare Earth Metals","Lanthanide","Hexagonal","Mild Base");
    Table["Pm"] = new Array("Pm",61,145,"",145,"[Xe]4f5&middot;6s2",2,"Solid",1441,2733,"Promethium","Rare Earth Metals","Lanthanide","Hexagonal","Mild Base","Synthetic","Radioactive");
    Table["Sm"] = new Array("Sm",62,152,"",150.4,"[Xe]4f6&middot;6s2",2,1345,2064,"Samarium","Rare Earth Metals","Lanthanide","Rhombohedral","Mild Base","Solid");
    Table["Eu"] = new Array("Eu",63,153,"",151.96,"[Xe]4f7&middot;6s2",2,"Solid",1090,1870,"Europium","Rare Earth Metals","Lanthanide","Mild Base");
    Table["Gd"] = new Array("Gd",64,158,"",157.25,"[Xe]4f7&middot;5d1&middot;6s2",2,"Solid",1585,3539,"Gadolinium","Rare Earth Metals","Lanthanide","Hexagonal","Mild Base");
    Table["Tb"] = new Array("Tb",65,159,"",158.9254,"[Xe]4f9&middot;6s2",2,"Solid",1630,3496,"Terbium","Rare Earth Metals","Lanthanide","Hexagonal","Weak Base");
    Table["Dy"] = new Array("Dy",66,164,"",162.5,"[Xe]4f10&middot;6s2",2,"Solid",1682,2835,"Dysprosium","Rare Earth Metals","Lanthanide","Hexagonal","Weak Base");
    Table["Ho"] = new Array("Ho",67,165,"",164.9304,"[Xe]4f11&middot;6s2",2,"Solid",1743,2968,"Holmium","Rare Earth Metals","Lanthanide","Hexagonal","Weak Base");
    Table["Er"] = new Array("Er",68,166,"",167.26,"[Xe]4f12&middot;6s2",2,"Solid",1795,3136,"Erbium","Rare Earth Metals","Lanthanide","Hexagonal","Weak Base");
    Table["Tm"] = new Array("Tm",69,169,"",168.9342,"[Xe]4f13&middot;6s2",2,"Solid",1818,2220,"Thulium","Rare Earth Metals","Lanthanide","Hexagonal","Weak Base");
    Table["Yb"] = new Array("Yb",70,174,"",173.04,"[Xe]4f14&middot;6s2",2,"Solid",1097,1467,"Ytterbium","Rare Earth Metals","Lanthanide","Weak Base");
    Table["Lu"] = new Array("Lu",71,175,"",174.967,"[Xe]4f14&middot;5d1&middot;6s2",2,"Solid",1936,3668,"Lutetium","Rare Earth Metals","Lanthanide","Hexagonal","Weak Base");
    
	
	Table["Hf"] = new Array("Hf",72,180,"4 (IVB)",178.49,"[Xe]4f14&middot;5d2&middot;6s2",2,"Solid",2500,4876,"Hafnium","Transition Metals","Hexagonal","Amphoteric");
    Table["Ta"] = new Array("Ta",73,181,"5 (VB)",180.9479,"[Xe]4f14&middot;5d3&middot;6s2",2,"Solid",3287,5731,"Tantalum","Transition Metals","Mild Acid");
    Table["W"] = new Array("W",74,184,"6 (VIB)",183.85,"[Xe]4f14&middot;5d4&middot;6s2",2,"Solid",3680,5828,"Tungsten","Transition Metals","Mild Acid");
    Table["Re"] = new Array("Re",75,187,"7 (VIIB)",186.207,"[Xe]4f14&middot;5d5&middot;6s2",2,"Solid",3453,5869,"Rhenium","Transition Metals","Hexagonal","Mild Acid");
   // find out correct group of
	Table["Os"] = new Array("Os",76,192,"8 (VIIIB)",190.2,"[Xe]4f14&middot;5d6&middot;6s2",2,"Solid",3300,5285,"Osmium","Transition Metals","Hexagonal","Mild Acid");
    Table["Ir"] = new Array("Ir",77,193,"9 (VIII)",192.22,"[Xe]4f14&middot;5d7&middot;6s2",2,"Solid",2716,4701,"Iridium","Transition Metals","Mild Base");
    Table["Pt"] = new Array("Pt",78,195,"",195.09,"[Xe]4f14&middot;5d9&middot;6s1",1,"Solid",2045,4100,"Platinum","Transition Metals","Mild Base");
    Table["Au"] = new Array("Au",79,197,"11 (IB)",196.9665,"[Xe]4f14&middot;5d10&middot;6s1",1,"Solid",1337.58,3130,"Gold","Transition Metals","Amphoteric");
    Table["Hg"] = new Array("Hg",80,202,"12 (IIB)",200.59,"[Xe]4f14&middot;5d10&middot;6s2",2,"Liquid",234.28,630,"Mercury","Transition Metals","Rhombohedral","Mild Base");
    Table["Tl"] = new Array("Tl",81,205,"13 (IIIA)",204.37,"[Xe]4f14&middot;5d10&middot;6s2&middot;6p1",3,"Solid",577,1746,"Thallium","Hexagonal","Mild Base","PostTransitionElement");
    Table["Pb"] = new Array("Pb",82,208,"14 (IVA)",207.2,"[Xe]4f14&middot;5d10&middot;6s2&middot;6p2",4,"Solid",600.6,2023,"Lead","Amphoteric","","PostTransitionElement");
    Table["Bi"] = new Array("Bi",83,209,"15 (VA)",208.9804,"[Xe]4f14&middot;5d10&middot;6s2&middot;6p3",5,"Solid",544.52,1837,"Bismuth","Rhombohedral","Mild Acid","PostTransitionElement");
    Table["Po"] = new Array("Po",84,209,"16 (VIA)",209,"[Xe]4f14&middot;5d10&middot;6s2&middot;6p4",6,"Solid",527,1235,"Polonium","Amphoteric","Metalloids","Radioactive");
    Table["At"] = new Array("At",85,210,"17 (VIIA)",210,"[Xe]4f14&middot;5d10&middot;6s2&middot;6p5",7,"Solid",575,610,"Astatine","Halogen","Non Metal","Radioactive");
    Table["Rn"] = new Array("Rn",86,222,"18 (VIIIA)",222,"[Xe]4f14&middot;5d10&middot;6s2&middot;6p6",8,"Gas",202,211,"Radon","Noble Gas","Non Metal","Radioactive");
    Table["Fr"] = new Array("Fr",87,223,"1 (IA)",223,"[Rn]7s1",1,"Liquid",300,950,"Francium","Alkali Metals","Strong Base","Radioactive");
    Table["Ra"] = new Array("Ra",88,226,"2 (IIA)",226.0254,"[Rn]7s2",2,"Solid",973,1809,"Radium","Alkali Earth Metals","Strong Base","Radioactive");
    
    
    // Actinides elements
    Table["Ac"] = new Array("Ac",89,227,"",227.0278,"[Rn]6d1&middot;7s2",2,"Solid",1323,3473,"Actinium","Rare Earth Metals","Neutral","Actinide","Radioactive");
    Table["Th"] = new Array("Th",90,232,"",232.0381,"[Rn]6d2&middot;7s2",2,"Solid",2028,5061,"Thorium","Actinide","Rare Earth Metals","Weak Base","Radioactive");
    Table["Pa"] = new Array("Pa",91,231,"",231.0359,"[Rn]5f2&middot;6d1&middot;7s2",2,"Solid","","","Protactinium","Rare Earth Metals","Actinide","Orthorhombic","Weak Base","Radioactive");
    Table["U"] = new Array("U",92,238,"",238.029,"[Rn]5f3&middot;6d1&middot;7s2",2,"Solid",1405,4407,"Uranium","Rare Earth Metals","Actinide","Orthorhombic","Amphoteric","Radioactive");
    Table["Np"] = new Array("Np",93,237,"",237.0482,"[Rn]5f4&middot;6d1&middot;7s2",2,"Solid","","","Neptunium","Synthetic","Rare Earth Metals","Actinide","Orthorhombic","Amphoteric","Radioactive");
    Table["Pu"] = new Array("Pu",94,244,"",244,"[Rn]5f6&middot;7s2",2,"Solid",913,3503,"Plutonium","Rare Earth Metals","Synthetic","Actinide","Amphoteric","Radioactive");
    Table["Am"] = new Array("Am",95,243,"",243,"[Rn]5f7&middot;7s2",2,"Solid",1268,2880,"Americium","Rare Earth Metals","Actinide","Hexagonal","Amphoteric","Synthetic","Radioactive");
    Table["Cm"] = new Array("Cm",96,247,"",247,"[Rn]5f7&middot;6d1&middot;7s2",2,"Solid",1613,"Curium","Rare Earth Metals","Actinide","Amphoteric","Synthetic","Radioactive");
    Table["Bk"] = new Array("Bk",97,247,"",247,"[Rn]5f9&middot;7s2",2,"Solid","","","Berkelium","Synthetic","Rare Earth Metals","Actinide","Radioactive");
    Table["Cf"] = new Array("Cf",98,251,"",251,"[Rn]5f10&middot;7s2",2,"Solid",900,"","Californium","Synthetic","Rare Earth Metals","Actinide","Radioactive");
    Table["Es"] = new Array("Es",99,252,"",252,"[Rn]5f11&middot;7s2",2,"Solid","","","Einsteinium","Actinide","Rare Earth Metals","Radioactive");
    Table["Fm"] = new Array("Fm",100,257,"",257,"[Rn]5f12&middot;7s2",2,"Solid","","","Fermium","Actinide","Rare Earth Metals","Radioactive");
    Table["Md"] = new Array("Md",101,258,"",258,"[Rn]5f13&middot;7s2",2,"Solid","","","Mendelevium","Rare Earth Metals","Actinide","Radioactive");
    Table["No"] = new Array("No",102,259,"",259,"[Rn]5f14&middot;7s2",2,"Solid","","","Nobelium","Rare Earth Metals","Actinide","Radioactive");
    Table["Lr"] = new Array("Lr",103,260,"",260,"[Rn]5f14&middot;6d1&middot;7s2",3,"Solid","","","Lawrencium","Rare Earth Metals","Actinide","Radioactive");  ///check it
    
    //
    Table["Rf"] = new Array("Rf",104,267,"4 (IVB)",267,"[Rn]5f14&middot;6d2&middot;7s2",2,"Unknown",2400,5800,"Rutherfordium","Synthetic","Transition Metals","Radioactive");
    Table["Db"] = new Array("Db",105,268,"5  ",268,"[Rn]5f14&middot;6d3&middot;7s2",2,"Unknown","","","Dubnium","Synthetic","Transition Metals","Radioactive");
    Table["Sg"] = new Array("Sg",106,271,"6  ",269,"[Rn]5f14&middot;6d4&middot;7s2",2,"Unknown","","","Seaborgium","Synthetic","Transition Metals","Radioactive");
    Table["Bh"]=new Array("Bh",107,272,"7 (VIIB)",272,"[Rn]5f14&middot;6d5&middot;7s2",2,"Unknown","","","Bohrium","Synthetic","Transition Metals","Radioactive");
    Table["Hs"]=new Array("Hs",108,270,"8 (VIIIB)",270,"[Rn]5f14&middot;6d6&middot;7s2",2,"Unknown","","","Hassium","Synthetic","Transition Metals","Radioactive");
     Table["Mt"]=new Array("Mt",109,276,"9 (VIIIB)",278,"[Rn]5f14&middot;6d7&middot;7s2",2,"Unknown","","","Meitnerium","Synthetic","Transition Metals","Radioactive");
  Table["Ds"]=new Array("Ds",110,281,"10 (VIIIB)",281,"[Rn]5f14&middot;6d8&middot;7s2",2,"Unknown","","","Darmstadtium","Synthetic","Transition Metals","Radioactive");
  Table["Rg"]=new Array("Rg",111,281,"11 (VIIIB)",281,"[Rn]5f14&middot;6d9&middot;7s2",2,"Unknown","","","Roentgenium","Synthetic","Transition Metals","Radioactive");
  Table["Cn"]=new Array("Cn",112,285,"12 (VIIIB)",285,"[Rn]5f14&middot;6d10&middot;7s2",2,"Unknown","","","Copernicium","Synthetic","Transition Metals","Radioactive");
  Table["Uut"]=new Array("Uut",113,286,"13 (IIIA)",286,"[Rn]5f14&middot;6d10&middot;7s2middot;7p1",3,"Unknown","","","Ununtrium","Synthetic","Radioactive","PostTransitionElement");
  Table["Fl"]=new Array("Fl",114,289,"14 (IVA)",289,"[Rn]5f14&middot;6d6&middot;7s2middot;7p2",4,"Unknown","","","Ununtrium","Synthetic","Radioactive","PostTransitionElement");
  Table["Uup"]=new Array("Uup",115,288,"15 (VA)",288,"[Rn]5f14&middot;6d6&middot;7s2middot;7p3",5,"Unknown","","","Ununpentium","Synthetic","Radioactive","PostTransitionElement");
  Table["Lv"]=new Array("Lv",116,293,"16 (VIA)",293,"[Rn]5f14&middot;6d6&middot;7s2middot;7p4",6,"Unknown","","","Ununhexium","Synthetic","","Radioactive","PostTransitionElement");
  Table["Uus"]=new Array("Uus",117,294,"17 (VIIA)",294,"[Rn]5f14&middot;6d6&middot;7s2middot;7p5",7,"Unknown","","","Ununseptium","Synthetic","Halogen","Non Metal","Radioactive");
  Table["Uuo"]=new Array("Uuo",118,294,"18 (VIIIA)",294,"[Rn]5f14&middot;6d6&middot;7s2middot;7p6",8,"Unknown","","","Ununoctium","","Synthetic","Noble Gas","Non Metal","Radioactive");
  
 
 
 
 
 
 
 var OpenWindow = new Array(2);
    for (var i = 0; i < 2; i++) {
      OpenWindow[i] = null; }
      
          function CloseOneWindow(atomicNumber) {
      if (OpenWindow[atomicNumber] != null && !OpenWindow[atomicNumber].closed) {
        OpenWindow[atomicNumber].close();
        OpenWindow[atomicNumber] = null; } }

 function OutputRow(windowObject, theLabel, theValue,theUnit) {
      if (theValue != null && theValue != "") {
        windowObject.document.write("<tr valign=\"middle\" align=\"left\">");
        windowObject.document.write("<td align=\"center\"><b>" + theLabel +
          "</b>:&nbsp;</td><td>" + theValue);
          if (theUnit != null) {
          windowObject.document.write("&nbsp;" + theUnit); }
        
        windowObject.document.writeln("</td></tr>"); } }

//  This function is used for navigating through property,creates a window in which  it in turns call OutputRow function

    function Element(elementSymbol) {
          
      var o = document.forms.output;
      var atomicNumber = Table[elementSymbol][1];
      var elementName = Table[elementSymbol][10];
      var e = window.open("", elementSymbol,
        "menubar=no,toolbar=no,directories=no,location=no,status=no," +
        "scrollbars=yes,resizable=yes,width=190,height=200");
      if (OpenWindow[atomicNumber] == null || OpenWindow[atomicNumber].closed) {
        OpenWindow[atomicNumber] = e;
        e.document.writeln("<html><head><title>" + elementName + " (" + elementSymbol + ")" +
          "</title></head><body bgcolor=\"#F5F5F5\" text=\"#000000\">");
        e.document.writeln("<center><table cellpadding=\"3\" cellspacing=\"1\" border=\"1\">");
        OutputRow(e, "Element", elementName, null);
        OutputRow(e, "Symbol", elementSymbol, null);
        for (var i = 0; i < 4; i++) {
          OutputRow(e, properties[i], Table[elementSymbol][i
			  +1],units[i]); }
        e.document.writeln("</table><center>");
        e.document.write("<form><br><input type=\"button\" onClick=\"window.close()\"" +
          " value=\" Close Element Window \"></form>");
        e.document.writeln("</center>");
        e.document.writeln("</body></html>"); }
      e.focus(); 
      
 
 }
      
      
       
      
        function Element1(elementSymbol) {
       
       var o = document.forms.output;
      var atomicNumber = Table[elementSymbol][0];
      var elementName = Table[elementSymbol][10];
      var e = window.open("", elementSymbol,
        "menubar=no,toolbar=no,directories=no,location=no,status=no," +
        "scrollbars=yes,resizable=yes,width=190,height=200");
      if (OpenWindow[atomicNumber] == null || OpenWindow[atomicNumber].closed) {
        OpenWindow[atomicNumber] = e;
        e.document.writeln("<html><head><title>" + elementName + " (" + elementSymbol + ")" +
          "</title></head><body bgcolor=\"#ffffff\" text=\"#000000\">");
        e.document.writeln("<center><table cellpadding=\"3\" cellspacing=\"1\" border=\"1\">");
        
        for (var i = 0; i < 5; i++) {
        
       // alert("Table[elementSymbol][i+6]");
          OutputRow(e, properties1[i], Table[elementSymbol][i+5],units1[i]); }
        e.document.writeln("</table><center>");
        // e.document.writeln("<br><center><table cellpadding=\"3\" cellspacing=\"1\" border=\"1\"><tr><td colspan=\"4\" bgcolor=\"red\">Red</td><td>Non&nbspMetal</td> </tr><br><tr><td colspan=\"4\" bgcolor=\"green\">Green</td><td>Metal</td></tr></table></center>");
        e.document.write("<form><br><input type=\"button\" onClick=\"window.close()\"" +
          " value=\" Close Element Window \"></form>");
        e.document.writeln("</center>");
        e.document.writeln("</body></html>"); }
      e.focus();  }



 //   ----function to get element of desired property 
  
  function getElementByPropertyArray(object1) {
  var myArray = new Array();
  for (var i in Table){
		  for(j=0;j<Table[i].length;j++)
		  if(Table[i][j]==object1)
				 myArray.push(Table[i][0]);
				}
                //alert("my Array  "+myArray);
                return myArray;
  }
 // -----function completes 
   
 // function for highlighting individual property called upon hover of color  
function highlightNonmetal(){
      defaultcolor();
	  var NonMetalArray=new Array();
       NonMetalArray=getElementByPropertyArray("Non Metal");
       for(var i=0; i< NonMetalArray.length;i++){
              document.getElementById(NonMetalArray[i]).style.backgroundColor = "#00ff00";
                      }
}

function highlightPtransitionMetal(){
      defaultcolor();
	  var PtransitionMetalArray=new Array();
       PtransitionMetalArray=getElementByPropertyArray("PostTransitionElement");
       for(var i=0; i< PtransitionMetalArray.length;i++){
              document.getElementById( PtransitionMetalArray[i]).style.backgroundColor = "#ff00ff";
                      }
}
function highlightMetalloids(){
      defaultcolor();
	  var MetalloidsArray=new Array();
        MetalloidsArray=getElementByPropertyArray("Metalloids");
       for(var i=0; i< MetalloidsArray.length;i++){
              document.getElementById(MetalloidsArray[i]).style.backgroundColor = "#FF34B3";
                      }
}
function highlightSolid(){
 defaultcolor();
	  var solidArray=new Array();
        solidArray=getElementByPropertyArray("Solid");
       for(var i=0; i< solidArray.length;i++){
         document.getElementById(solidArray[i]).style.backgroundColor = "#FFFF00"; 
                             } 
}
function highlightLiquid(){
defaultcolor();
	  var liquidArray=new Array();
        liquidArray=getElementByPropertyArray("Liquid");
for(var i=0; i<liquidArray.length;i++){
         document.getElementById(liquidArray[i]).style.backgroundColor = "#00FFFF"; 
                             }    
}
function highlightGas(){
defaultcolor();
	  var gasArray=new Array();
        gasArray=getElementByPropertyArray("Gas");
for(var i=0; i<gasArray.length;i++){
         document.getElementById(gasArray[i]).style.backgroundColor = "#FF7F50"; 
                             }
}
function highlightAlkaliMetal(){
defaultcolor();
	  var AlkaliMetalArray=new Array();
        AlkaliMetalArray=getElementByPropertyArray("Alkali Metals");
for(var i=0; i<AlkaliMetalArray.length;i++){
         document.getElementById(AlkaliMetalArray[i]).style.backgroundColor = "#a0a0ff"; 
                             }
}
function highlightAlkaliEarthMetal(){
defaultcolor();
	  var AlkaliEarthMetalArray=new Array();
        AlkaliEarthMetalArray=getElementByPropertyArray("Alkali Earth Metals");
for(var i=0; i<AlkaliEarthMetalArray.length;i++){
         document.getElementById(AlkaliEarthMetalArray[i]).style.backgroundColor = "#00FF7F"; 
                             }
}
function highlightRareEarthMetal(){
defaultcolor();
	  var RareEarthMetalArray=new Array();
        RareEarthMetalArray=getElementByPropertyArray("Rare Earth Metals");
for(var i=0; i<RareEarthMetalArray.length;i++){
         document.getElementById(RareEarthMetalArray[i]).style.backgroundColor = "#FF6A6A"; 
                             }
}
function highlightTransitionMetal(){
defaultcolor();
	  var TransitionMetalArray=new Array();
        TransitionMetalArray=getElementByPropertyArray("Transition Metals");
for(var i=0; i<TransitionMetalArray.length;i++){
         document.getElementById(TransitionMetalArray[i]).style.backgroundColor = "#FFBF00"; 
                             }
}
function highlightHalogen(){
defaultcolor();
	  var HalogenArray=new Array();
        HalogenArray=getElementByPropertyArray("Halogen");
for(var i=0; i<HalogenArray.length;i++){
         document.getElementById(HalogenArray[i]).style.backgroundColor = "#FF8000"; 
                             }
}
function highlightNoblegas(){
defaultcolor();
	  var NoblegasArray=new Array();
        NoblegasArray=getElementByPropertyArray("Noble Gas");
for(var i=0; i< NoblegasArray.length;i++){
         document.getElementById(NoblegasArray[i]).style.backgroundColor = "#04B404"; 
                             }
}
function highlightLanthanide(){
defaultcolor();
	  var LanthanideArray=new Array();
        LanthanideArray=getElementByPropertyArray("Lanthanide");
for(var i=0; i<  LanthanideArray.length;i++){
         document.getElementById( LanthanideArray[i]).style.backgroundColor = "#FA58F4"; 
                             }
}
function highlightActanide(){
defaultcolor();
	  var ActanideArray=new Array();
        ActanideArray=getElementByPropertyArray("Actinide");
for(var i=0; i<  ActanideArray.length;i++){
         document.getElementById(ActanideArray[i]).style.backgroundColor = "#81F7D8"; 
                             }
}



// function ends


  function highlightNonMetalsandMetalloids(){
         defaultcolor();
		 deleteTableRows();
		document.getElementById('colorcaption').style.visibility = "visible";
       var NonMetalArray=new Array();
	   var MetalloidsArray=new Array();
   	   NonMetalArray=getElementByPropertyArray("Non Metal");
       MetalloidsArray=getElementByPropertyArray("Metalloids");
     for(var i=0; i< NonMetalArray.length;i++){
     //alert(NonMetalArray.length);
           document.getElementById(NonMetalArray[i]).style.backgroundColor = "#00ff00";
                      }
      for(var i=0; i< MetalloidsArray.length;i++){
           document.getElementById( MetalloidsArray[i]).style.backgroundColor = "#FF34B3";
                      }
				 var tbl=document.getElementById("colorconvention");
                var row =tbl.insertRow(0);
                var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
                 var cell3 = row.insertCell(2);
                 var cell4 = row.insertCell(3);
                cell1.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                cell1.style.background="#00ff00";
                cell1.setAttribute("onMouseOver","highlightNonmetal()");
                 cell1.setAttribute("onMouseOut","highlightNonMetalsandMetalloids()");
				 cell2.innerHTML="Non Metal";
              cell3.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                cell3.style.background="#FF34B3";cell4.innerHTML="Metalloids";
				cell3.setAttribute("onMouseOver","highlightMetalloids()");
					//cell4.setAttribute("onClick","highlightNonMetalsandMetalloids()");
                 cell3.setAttribute("onMouseOut","highlightNonMetalsandMetalloids()");
                 	 
                 	}
   function LanthenidesandActenides(){
         defaultcolor();
		 deleteTableRows();
		document.getElementById('colorcaption').style.visibility = "visible";
       var LanthenideArray=new Array();
	   var ActenideArray=new Array();
   	   LanthenideArray=getElementByPropertyArray("Lanthanide");
       ActenideArray=getElementByPropertyArray("Actinide");
     for(var i=0; i< LanthenideArray.length;i++){
     //alert(NonMetalArray.length);
           document.getElementById( LanthenideArray[i]).style.backgroundColor = "#FA58F4";
                      }
      for(var i=0; i< ActenideArray.length;i++){
           document.getElementById( ActenideArray[i]).style.backgroundColor = "#81F7D8";
                      }
				 var tbl=document.getElementById("colorconvention");
                var row =tbl.insertRow(0);
                var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
                 var cell3 = row.insertCell(2);
                 var cell4 = row.insertCell(3);
                cell1.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                cell1.style.background="#FA58F4";
                cell1.setAttribute("onMouseOver","highlightLanthanide()");
                 cell1.setAttribute("onMouseOut","LanthenidesandActenides()");
				 cell2.innerHTML="Lanthanides";
              cell3.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                cell3.style.background="#81F7D8";cell4.innerHTML="Actinides";
				cell3.setAttribute("onMouseOver","highlightActanide()");
					//cell4.setAttribute("onClick","highlightNonMetalsandMetalloids()");
                 cell3.setAttribute("onMouseOut","LanthenidesandActenides()");
                 	 
                 	}
                 	              	
    function highlightradioactive(){
         defaultcolor();
		 deleteTableRows();
		document.getElementById('colorcaption').style.visibility = "visible";
       var RadioactiveArray=new Array();
    RadioactiveArray=getElementByPropertyArray("Radioactive");
	for(var i=0; i< RadioactiveArray.length;i++){
     
           document.getElementById( RadioactiveArray[i]).style.backgroundColor = "#BF3EFF";
                      }
    var tbl=document.getElementById("colorconvention");
                var row =tbl.insertRow(0);
                var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
                 
                cell1.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                cell1.style.background="#BF3EFF";
                
				 cell2.innerHTML="Radioactive Elements";
              
                 	 
                 	}             	
                 	
   
   function HighlightStates() {
      defaultcolor();
				  deleteTableRows();
				  document.getElementById('colorcaption').style.visibility = "visible";
     var gasArray=new Array();
     var liquidArray=new Array();
     var solidArray=new Array();
     gasArray=getElementByPropertyArray("Gas");
     liquidArray=getElementByPropertyArray("Liquid");
     solidArray=getElementByPropertyArray("Solid");
          for(var i=0; i<gasArray.length;i++){
         document.getElementById(gasArray[i]).style.backgroundColor = "#FF7F50"; 
                             }
         for(var i=0; i<liquidArray.length;i++){
         document.getElementById(liquidArray[i]).style.backgroundColor = "#00FFFF"; 
                             }                                      
         for(var i=0; i< solidArray.length;i++){
         document.getElementById(solidArray[i]).style.backgroundColor = "#FFFF00"; 
                             } 
             
var tbl=document.getElementById("colorconvention");
                var row =tbl.insertRow(0);
                var cell1 = row.insertCell(0);
                cell1.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                cell1.style.background="#FFFF00";
                cell1.setAttribute("onMouseOver"," highlightSolid()");
                 cell1.setAttribute("onMouseOut","HighlightStates()");
                 
                  
				 var cell2 = row.insertCell(1);
				 var cell3 = row.insertCell(2);
				 var cell4 = row.insertCell(3);
				 var row1= tbl.insertRow(1);
				 var cell5=row1.insertCell(0); var cell6=row1.insertCell(1); var cell7=row1.insertCell(2); var cell8=row1.insertCell(3);
				//cell2.setAttribute("onClick","HighlightStates()");
				 cell2.innerHTML="Solid";cell3.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";cell3.style.background="#00FFFF";
				 cell3.setAttribute("onMouseOver","highlightLiquid()");cell3.setAttribute("onMouseOut","HighlightStates()");
				  cell5.setAttribute("onMouseOver","highlightGas()");cell5.setAttribute("onMouseOut","HighlightStates()");
                 cell4.innerHTML="Liquid";
				 cell5.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; cell5.style.background="#FF7F50";
				 cell6.innerHTML="Gas";
	              cell7.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; cell7.style.background="#FFE9FF";
				  cell8.innerHTML="Unknown";


             } 


        function HalogensandNobleGas(){
			//alert("infunction");
                  defaultcolor(); // we call this function inside halogenandnoblegas as we wanted to refresh all colors on checking sm radio button
				  deleteTableRows();
				  document.getElementById('colorcaption').style.visibility = "visible";
       var HalogenArray=new Array();
	   var NoblegasArray=new Array();
     HalogenArray=getElementByPropertyArray("Halogen");
           NoblegasArray=getElementByPropertyArray("Noble Gas");
		   
     for(var i=0; i<  HalogenArray.length;i++){
           document.getElementById(HalogenArray[i]).style.backgroundColor = "#FF8000";
                      }
      for(var i=0; i< NoblegasArray.length;i++){
           document.getElementById(NoblegasArray[i]).style.backgroundColor = "#04B404";
                      }
                 var tbl=document.getElementById("colorconvention");
                 var row =tbl.insertRow(0);
                 var cell1 = row.insertCell(0);
				 var cell2 = row.insertCell(1);
                 var cell3 = row.insertCell(2);
                 var cell4 = row.insertCell(3);
                cell1.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                cell1.style.background="#FF8000";
                cell1.setAttribute("onMouseOver","highlightHalogen()");
                 cell1.setAttribute("onMouseOut","HalogensandNobleGas()");
				 cell2.innerHTML="Halogen";
              cell3.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			   cell3.setAttribute("onMouseOver","highlightNoblegas()");
                 cell3.setAttribute("onMouseOut","HalogensandNobleGas()");
                cell3.style.background="#04B404";cell4.innerHTML="Noble Gas";
                 
                }     
             
    // this function highlight all metal types also create dynamic cells for color convention 
	//and also call some function which highlight specific metals on hover event
	
	function  highlightMetalstypes()
    {        
		 defaultcolor();     // this function is used for making each cell color as it was in default
		 deleteTableRows();  // this function is used for deleting all those rows which were created for color convetion
		document.getElementById('colorcaption').style.visibility = "visible";
             var AlkaliArray=new Array();
             var  AlkaliEarthArray=new Array();
             var  RareEarthArray=new Array();
             var TransitionArray=new Array();
		var PostTransitionMetalArray=new Array();

            PostTransitionMetalArray=getElementByPropertyArray("PostTransitionElement");
            AlkaliArray=getElementByPropertyArray("Alkali Metals"); 
            AlkaliEarthArray=getElementByPropertyArray("Alkali Earth Metals");
            RareEarthArray=getElementByPropertyArray("Rare Earth Metals");
            TransitionArray=getElementByPropertyArray("Transition Metals");
        
                            for(var i=0; i< AlkaliArray.length; i++){
                              
      document.getElementById( AlkaliArray[i]).style.backgroundColor = "#a0a0ff"; 
                           } 
                       for(var i=0; i< AlkaliEarthArray.length;i++){
         document.getElementById( AlkaliEarthArray[i]).style.backgroundColor = "#00FF7F"; 
                      } 
                        for(var i=0; i< RareEarthArray.length;i++){
        document.getElementById(RareEarthArray[i]).style.backgroundColor = "#FF6A6A"; 
                           } 
             for(var i=0; i< TransitionArray.length;i++){
        document.getElementById(TransitionArray[i]).style.backgroundColor = "#FFBF00"; 
                          } 
		  for(var i=0; i< PostTransitionMetalArray.length;i++){
        document.getElementById(  PostTransitionMetalArray[i]).style.backgroundColor = "#FF00ff"; 
                          } 


            var tbl=document.getElementById("colorconvention");
                 var row =tbl.insertRow(0);
                  var cell1 = row.insertCell(0);
                  cell1.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                  cell1.style.background="#a0a0ff";
                  cell1.setAttribute("onMouseOver","highlightAlkaliMetal()");
                  cell1.setAttribute("onMouseOut","highlightMetalstypes()");
                  var cell2 = row.insertCell(1);var cell3 = row.insertCell(2); var cell4 = row.insertCell(3);
				 
				 var row1= tbl.insertRow(1);var row2= tbl.insertRow(2);
			      
 				 var cell5=row1.insertCell(0); var cell6=row1.insertCell(1);
 				var cell7=row1.insertCell(2); var cell8=row1.insertCell(3);
				
				var cell9=row2.insertCell(0); var cell10=row2.insertCell(1);
				
				cell2.innerHTML="Alkali Metal";
				 cell3.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";cell3.style.background="#00FF7F";
 				cell3.setAttribute("onMouseOver","highlightAlkaliEarthMetal()");
				cell3.setAttribute("onMouseOut","highlightMetalstypes()");                  
				cell4.innerHTML="Alkali  Earth Metal";
				  cell5.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; cell5.style.background="#FF6A6A";
 cell5.setAttribute("onMouseOver","highlightRareEarthMetal()");
				  cell5.setAttribute("onMouseOut","highlightMetalstypes()");
				  cell6.innerHTML="Rare Earth Metal";
	              cell7.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; cell7.style.background="#FFBF00";
				  cell7.setAttribute("onMouseOver","highlightTransitionMetal()");cell7.setAttribute("onMouseOut","highlightMetalstypes()");
				  cell8.innerHTML="Transition Metal";
cell9.innerHTML="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";cell9.style.background="#ff00ff";
cell9.setAttribute("onMouseOver","highlightPtransitionMetal()");
cell9.setAttribute("onMouseOut","highlightMetalstypes()");   
cell10.innerHTML="PostTransition Metals"; 
			}
    
    
 
                  
 //  function is used for  opening link for each element
function output(elementSymbol){
if(document.getElementById('cb1').checked){
   
	//some code should be here to highlight all the links and underline them
   Element(elementSymbol);
	}
if(document.getElementById('cb2').checked){
	Element1(elementSymbol);
}	
}

// this function is used for  disabling all checkbox as well as all radio button window load
function Disablecbx(){
 document.getElementById('colorcaption').style.visibility = "hidden";
 document.getElementById("cb1").checked=false;
 document.getElementById("cb2").checked=false;
 document.getElementById("rb3").checked=false;
 document.getElementById("rb4").checked=false;
 document.getElementById("rb5").checked=false;
 document.getElementById("rb6").checked=false;
 document.getElementById("rb7").checked=false;
document.getElementById("rb8").checked=false;
}

// This function is used for making each cell color as it was in default means on window load
// it will be same as color code for .transition in style element in starting of html file
function defaultcolor(){
     var gasArray=new Array();
     var liquidArray=new Array();
     var solidArray=new Array();
     var rareearthArray=new Array();
     var TransitionArray=new Array();
     gasArray=getElementByPropertyArray("Gas");
     liquidArray=getElementByPropertyArray("Liquid");
     solidArray=getElementByPropertyArray("Solid");
     rareearthArray=getElementByPropertyArray("Rare Earth Metals");
     TransitionArray=getElementByPropertyArray("Transition Metals");
          for(var i=0; i<gasArray.length;i++){
          document.getElementById(gasArray[i]).style.backgroundColor = "#FFE9FF"; 
                             }
          for(var i=0; i<liquidArray.length;i++){
          document.getElementById(liquidArray[i]).style.backgroundColor = "#FFE9FF"; 
                             }  
		  for(var i=0; i<solidArray.length;i++){
          document.getElementById(solidArray[i]).style.backgroundColor = "#FFE9FF"; 
                             } 
          for(var i=0; i<rareearthArray.length;i++){
          document.getElementById(rareearthArray[i]).style.backgroundColor= "#FFE9FF"; 
                             }   
          for(var i=0; i<TransitionArray.length;i++){
          document.getElementById(TransitionArray[i]).style.backgroundColor = "#FFE9FF"; 
                             } 
          document.getElementById("Uus").style.backgroundColor = "#FFE9FF";                     
          document.getElementById("Uuo").style.backgroundColor = "#FFE9FF";
document.getElementById("Uut").style.backgroundColor = "#FFE9FF";
document.getElementById("Fl").style.backgroundColor = "#FFE9FF";
document.getElementById("Uup").style.backgroundColor = "#FFE9FF";
document.getElementById("Lv").style.backgroundColor = "#FFE9FF";
}

//  New Code for deleting dynamically created rows by .insertRows and .insertcells method
function deleteTableRows(){
	var tbl=document.getElementById("colorconvention");
    var row=tbl.rows.length;
	while (row > 0){
	tbl.deleteRow(0); row=tbl.rows.length;
	  }
}

