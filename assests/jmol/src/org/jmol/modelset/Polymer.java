/* $RCSfile$
 * $Author: hansonr $
 * $Date: 2010-10-10 08:14:10 -0500 (Sun, 10 Oct 2010) $
 * $Revision: 14452 $
 *
 * Copyright (C) 2002-2005  The Jmol Development Team
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
package org.jmol.modelset;

import java.util.BitSet;
import java.util.Vector;
import java.util.Hashtable;

import javax.vecmath.Point3f;
import javax.vecmath.Vector3f;


import org.jmol.util.OutputStringBuffer;
import org.jmol.viewer.Viewer;

abstract public class Polymer {

  /*
   * this is a new class of "polymer" that does not necessarily have anything
   * created from it. Jmol can use it instead of any bioPolymer subclass, since
   * there are now no references to any bio-related classes in Viewer. 
   * 
   * 
   */
  
  // these arrays will be one longer than the polymerCount
  // we probably should have better names for these things
  // holds center points between alpha carbons or sugar phosphoruses
  protected Point3f[] leadMidpoints;
  protected Point3f[] leadPoints;
  protected Point3f[] sheetPoints;
  // holds the vector that runs across the 'ribbon'
  protected Vector3f[] wingVectors;

  protected int[] leadAtomIndices;

  protected int type = TYPE_NOBONDING;
  public int bioPolymerIndexInModel;
  public int monomerCount;

  protected final static int TYPE_NOBONDING = 0; // could be phosphorus or alpha
  protected final static int TYPE_AMINO = 1;
  protected final static int TYPE_NUCLEIC = 2;
  protected final static int TYPE_CARBOHYDRATE = 3;
  
  protected Polymer() {
  }

  public int getType() {
    return type;
  }

  public void getRange(BitSet bs) {
  }
  
  public int getPolymerPointsAndVectors(int last, BitSet bs, Vector vList,
                                        boolean isTraceAlpha,
                                        float sheetSmoothing) {
    return 0;
  }

  public void addSecondaryStructure(byte type, 
                                    String structureID, int serialID, int strandCount,
                                    char startChainID,
                                    int startSeqcode, char endChainID,
                                    int endSeqcode) {
  }

  public void freeze() {  
  }
  
  public void calculateStructures() {
  }

  public void clearStructures() {
  }

  public String getSequence() {
    return "";
  }

  public Hashtable getPolymerInfo(BitSet bs) {
    return null;
  }

  public void setConformation(BitSet bsConformation, int nAltLocs) {
  }

  public void calcRasmolHydrogenBonds(Polymer polymer, BitSet bsA, BitSet bsB, Vector vHBonds, int nMaxPerResidue) {
    // subclasses should override if they know how to calculate hbonds
  }
  
  public void calcSelectedMonomersCount(BitSet bsSelected) {
  }

  public void getPolymerSequenceAtoms(int group1,
                                      int nGroups, BitSet bsInclude,
                                      BitSet bsResult) {
  }

  public Point3f[] getLeadMidpoints() {
    return null;
  }
  
  public void recalculateLeadMidpointsAndWingVectors() {  
  }
  
  public void getPdbData(Viewer viewer, char ctype, char qtype, int mStep, int derivType, 
              boolean isDraw, BitSet bsAtoms, OutputStringBuffer pdbATOM, 
              StringBuffer pdbCONECT, BitSet bsSelected, boolean addHeader, 
              boolean bothEnds, BitSet bsWritten) {
    return;
  }

  public Vector calculateStruts(ModelSet modelSet, Atom[] atoms, BitSet bs1, BitSet bs2, Vector vCA, float thresh, int delta, boolean allowMultiple) {
    return null;
  }

  public boolean isDna() { return false; }
  public boolean isRna() { return false; }

  public void getRangeGroups(int residues, BitSet bs, BitSet bsResult) {
  }

  public Group[] getGroups() {
    return null;
  }
  
  public void getConformation(BitSet bsConformation, int conformationIndex) {
  }

}
