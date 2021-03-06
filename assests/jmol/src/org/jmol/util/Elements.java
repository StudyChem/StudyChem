/* $RCSfile$
 * $Author: egonw $
 * $Date: 2005-11-10 10:52:44 -0500 (Thu, 10 Nov 2005) $
 * $Revision: 4255 $
 *
 * Copyright (C) 2006  Miguel, Jmol Development, www.jmol.org
 *
 * Contact: jmol-developers@lists.sf.net
 *
 *  This library is free software; you can redistribute it and/or
 *  modify it under the terms of the GNU Lesser General Public
 *  License as published by the Free Software Foundation; either
 *  version 2.1 of the License, or (at your option) any later version.
 *
 *  This library is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 *  Lesser General Public License for more details.
 *
 *  You should have received a copy of the GNU Lesser General Public
 *  License along with this library; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA.
 */

package org.jmol.util;

import java.util.Hashtable;

import org.jmol.viewer.JmolConstants;

public class Elements {

  /**
   * The default elementSymbols. Presumably the only entry which may cause
   * confusion is element 0, whose symbol we have defined as "Xx". 
   */
  public final static String[] elementSymbols = {
    "Xx", // 0
    "H",  // 1
    "He", // 2
    "Li", // 3
    "Be", // 4
    "B",  // 5
    "C",  // 6
    "N",  // 7
    "O",  // 8
    "F",  // 9
    "Ne", // 10
    "Na", // 11
    "Mg", // 12
    "Al", // 13
    "Si", // 14
    "P",  // 15
    "S",  // 16
    "Cl", // 17
    "Ar", // 18
    "K",  // 19
    "Ca", // 20
    "Sc", // 21
    "Ti", // 22
    "V",  // 23
    "Cr", // 24
    "Mn", // 25
    "Fe", // 26
    "Co", // 27
    "Ni", // 28
    "Cu", // 29
    "Zn", // 30
    "Ga", // 31
    "Ge", // 32
    "As", // 33
    "Se", // 34
    "Br", // 35
    "Kr", // 36
    "Rb", // 37
    "Sr", // 38
    "Y",  // 39
    "Zr", // 40
    "Nb", // 41
    "Mo", // 42
    "Tc", // 43
    "Ru", // 44
    "Rh", // 45
    "Pd", // 46
    "Ag", // 47
    "Cd", // 48
    "In", // 49
    "Sn", // 50
    "Sb", // 51
    "Te", // 52
    "I",  // 53
    "Xe", // 54
    "Cs", // 55
    "Ba", // 56
    "La", // 57
    "Ce", // 58
    "Pr", // 59
    "Nd", // 60
    "Pm", // 61
    "Sm", // 62
    "Eu", // 63
    "Gd", // 64
    "Tb", // 65
    "Dy", // 66
    "Ho", // 67
    "Er", // 68
    "Tm", // 69
    "Yb", // 70
    "Lu", // 71
    "Hf", // 72
    "Ta", // 73
    "W",  // 74
    "Re", // 75
    "Os", // 76
    "Ir", // 77
    "Pt", // 78
    "Au", // 79
    "Hg", // 80
    "Tl", // 81
    "Pb", // 82
    "Bi", // 83
    "Po", // 84
    "At", // 85
    "Rn", // 86
    "Fr", // 87
    "Ra", // 88
    "Ac", // 89
    "Th", // 90
    "Pa", // 91
    "U",  // 92
    "Np", // 93
    "Pu", // 94
    "Am", // 95
    "Cm", // 96
    "Bk", // 97
    "Cf", // 98
    "Es", // 99
    "Fm", // 100
    "Md", // 101
    "No", // 102
    "Lr", // 103
    "Rf", // 104
    "Db", // 105
    "Sg", // 106
    "Bh", // 107
    "Hs", // 108
    "Mt", // 109
    /*
    "Ds", // 110
    "Uu",// 111
    "Ub",// 112
    "Ut",// 113
    "Uq",// 114
    "Up",// 115
    "Uh",// 116
    "Us",// 117
    "Uuo",// 118
    */
  };

  
  /**
   * one larger than the last elementNumber, same as elementSymbols.length
   */
  public final static int elementNumberMax = elementSymbols.length;
  /**
   * @param elementSymbol First char must be upper case, second char accepts upper or lower case
   * @param isSilent TODO
   * @return elementNumber = atomicNumber + IsotopeNumber*128
   */
  public final static short elementNumberFromSymbol(String elementSymbol, boolean isSilent) {
    if (Elements.htElementMap == null) {
      Hashtable map = new Hashtable();
      for (int elementNumber = elementNumberMax; --elementNumber >= 0;) {
        String symbol = elementSymbols[elementNumber];
        Integer boxed = new Integer(elementNumber);
        map.put(symbol, boxed);
        if (symbol.length() == 2)
          map.put(symbol.toUpperCase(), boxed);
      }
      for (int i = Elements.altElementMax; --i >= JmolConstants.firstIsotope;) {
        String symbol = Elements.altElementSymbols[i];
        Integer boxed = new Integer(Elements.altElementNumbers[i]);
        map.put(symbol, boxed);
        if (symbol.length() == 2)
          map.put(symbol.toUpperCase(), boxed);
      }
      Elements.htElementMap = map;
    }
    if (elementSymbol == null)
      return 0;
    Integer boxedAtomicNumber = (Integer) Elements.htElementMap.get(elementSymbol);
    if (boxedAtomicNumber != null)
      return (short) boxedAtomicNumber.intValue();
    if (!isSilent)
      Logger.error("'" + elementSymbol + "' is not a recognized symbol");
    return 0;
  }
  public static Hashtable htElementMap;
  /**
   * @param elementNumber may be atomicNumber + isotopeNumber*128
   * @return elementSymbol
   */
  public final static String elementSymbolFromNumber(int elementNumber) {
    //Isotopes as atomicNumber + IsotopeNumber * 128
    if (elementNumber >= elementNumberMax) {
      for (int j = Elements.altElementMax; --j >= 0;)
        if (elementNumber == Elements.altElementNumbers[j])
          return Elements.altElementSymbols[j];
      elementNumber %= 128;
    }
    if (elementNumber < 0 || elementNumber >= elementNumberMax)
      elementNumber = 0;
    return elementSymbols[elementNumber];
  }
  public final static String elementNames[] = {
    "unknown",       //  0
    "hydrogen",      //  1
    "helium",        //  2
    "lithium",       //  3
    "beryllium",     //  4
    "boron",         //  5
    "carbon",        //  6
    "nitrogen",      //  7
    "oxygen",        //  8
    "fluorine",      //  9
    "neon",          // 10
    "sodium",        // 11
    "magnesium",     // 12
    "aluminum",      // 13 aluminium
    "silicon",       // 14
    "phosphorus",    // 15
    "sulfur",        // 16 sulphur
    "chlorine",      // 17
    "argon",         // 18
    "potassium",     // 19
    "calcium",       // 20
    "scandium",      // 21
    "titanium",      // 22
    "vanadium",      // 23
    "chromium",      // 24
    "manganese",     // 25
    "iron",          // 26
    "cobalt",        // 27
    "nickel",        // 28
    "copper",        // 29
    "zinc",          // 30
    "gallium",       // 31
    "germanium",     // 32
    "arsenic",       // 33
    "selenium",      // 34
    "bromine",       // 35
    "krypton",       // 36
    "rubidium",      // 37
    "strontium",     // 38
    "yttrium",       // 39
    "zirconium",     // 40
    "niobium",       // 41
    "molybdenum",    // 42
    "technetium",    // 43
    "ruthenium",     // 44
    "rhodium",       // 45
    "palladium",     // 46
    "silver",        // 47
    "cadmium",       // 48
    "indium",        // 49
    "tin",           // 50
    "antimony",      // 51
    "tellurium",     // 52
    "iodine",        // 53
    "xenon",         // 54
    "cesium",        // 55  caesium
    "barium",        // 56
    "lanthanum",     // 57
    "cerium",        // 58
    "praseodymium",  // 59
    "neodymium",     // 60
    "promethium",    // 61
    "samarium",      // 62
    "europium",      // 63
    "gadolinium",    // 64
    "terbium",       // 66
    "dysprosium",    // 66
    "holmium",       // 67
    "erbium",        // 68
    "thulium",       // 69
    "ytterbium",     // 70
    "lutetium",      // 71
    "hafnium",       // 72
    "tantalum",      // 73
    "tungsten",      // 74
    "rhenium",       // 75
    "osmium",        // 76
    "iridium",       // 77
    "platinum",      // 78
    "gold",          // 79
    "mercury",       // 80
    "thallium",      // 81
    "lead",          // 82
    "bismuth",       // 83
    "polonium",      // 84
    "astatine",      // 85
    "radon",         // 86
    "francium",      // 87
    "radium",        // 88
    "actinium",      // 89
    "thorium",       // 90
    "protactinium",  // 91
    "uranium",       // 92
    "neptunium",     // 93
    "plutonium",     // 94
    "americium",     // 95
    "curium",        // 96
    "berkelium",     // 97
    "californium",   // 98
    "einsteinium",   // 99
    "fermium",       // 100
    "mendelevium",   // 101
    "nobelium",      // 102
    "lawrencium",    // 103
    "rutherfordium", // 104
    "dubnium",       // 105
    "seaborgium",    // 106
    "bohrium",       // 107
    "hassium",       // 108
    "meitnerium"     // 109
  };
  
  /**
   * @param elementNumber may be atomicNumber + isotopeNumber*128
   * @return elementName
   */
  public final static String elementNameFromNumber(int elementNumber) {
    //Isotopes as atomicNumber + IsotopeNumber * 128
    if (elementNumber >= elementNumberMax) {
      for (int j = Elements.altElementMax; --j >= 0;)
        if (elementNumber == Elements.altElementNumbers[j])
          return Elements.altElementNames[j];
      elementNumber %= 128;
    }
    if (elementNumber < 0 || elementNumber >= elementNumberMax)
      elementNumber = 0;
    return elementNames[elementNumber];
  }
  
  /**
   * @param i index into altElementNames
   * @return elementName
   */
  public final static String altElementNameFromIndex(int i) {
    return Elements.altElementNames[i];
  }
  
  /**
   * @param i index into altElementNumbers
   * @return elementNumber (may be atomicNumber + isotopeNumber*128)
   */
  public final static short altElementNumberFromIndex(int i) {
    return Elements.altElementNumbers[i];
  }
  
  /**
   * @param i index into altElementSymbols
   * @return elementSymbol
   */
  public final static String altElementSymbolFromIndex(int i) {
    return Elements.altElementSymbols[i];
  }
  
  /**
   * @param i index into altElementSymbols
   * @return 2H
   */
  public final static String altIsotopeSymbolFromIndex(int i) {
    int code = Elements.altElementNumbers[i]; 
    return (code >> 7) + elementSymbolFromNumber(code & 127);
  }
  
  public final static short getAtomicAndIsotopeNumber(int n, int mass) {
    return (short) ((n < 0 ? 0 : n) + (mass <= 0 ? 0 : mass << 7));
  }
  
  /**
   * @param atomicAndIsotopeNumber (may be atomicNumber + isotopeNumber*128)
   * @return  index into altElementNumbers
   */
  public final static int altElementIndexFromNumber(int atomicAndIsotopeNumber) {
    for (int i = 0; i < Elements.altElementMax; i++)
      if (Elements.altElementNumbers[i] == atomicAndIsotopeNumber)
        return i;
    return 0;
  }
  
  // add as we go
  private final static String naturalIsotopes = "1H,12C,14N,";
  
  public final static boolean isNaturalIsotope(String isotopeSymbol) {
    return (naturalIsotopes.indexOf(isotopeSymbol + ",") >= 0);      
  }
  
  private final static short[] altElementNumbers = {
    0,
    13,
    16,
    55,
    (2 << 7) + 1, // D = 2*128 + 1 <-- firstIsotope
    (3 << 7) + 1, // T = 3*128 + 1
    (11 << 7) + 6, // 11C
    (13 << 7) + 6, // 13C
    (14 << 7) + 6, // 14C
    (15 << 7) + 7, // 15N
  };
  
  /**
   * length of the altElementSymbols, altElementNames, altElementNumbers arrays
   */
  public final static int altElementMax = altElementNumbers.length;

  private final static String[] altElementSymbols = {
    "Xx",
    "Al",
    "S",
    "Cs",
    "D",
    "T",
    "11C",
    "13C",
    "14C",
    "15N",
  };
  
  private final static String[] altElementNames = {
    "dummy",
    "aluminium",
    "sulphur",
    "caesium",
    "deuterium",
    "tritium",
    "",
    "",
    "",
    "",
  };
  
}
