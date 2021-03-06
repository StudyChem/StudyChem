package org.jmol.api;

import java.util.BitSet;
import java.util.Vector;

import javax.vecmath.Point3f;


public interface MOCalculationInterface {

  public abstract void calculate(VolumeDataInterface volumeData, BitSet bsSelected,
                                 String calculationType,
                                 Point3f[] atomCoordAngstroms,
                                 int firstAtomOffset, Vector shells,
                                 float[][] gaussians, int[][] dfCoefMaps,
                                 Object slaters,
                                 float[] moCoefficients, float[] nuclearCharges, boolean doNormalize);
  
  public abstract void calculateElectronDensity(float[] nuclearCharges);
}
