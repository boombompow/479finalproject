/**
 * This file is part of the Java Machine Learning Library
 * 
 * The Java Machine Learning Library is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * The Java Machine Learning Library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with the Java Machine Learning Library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * 
 * Copyright (c) 2006-2010, Thomas Abeel
 * 
 * Project: http://java-ml.sourceforge.net/
 * 
 */
package net.sf.javaml.clustering.evaluation;

import net.sf.javaml.core.Dataset;
import net.sf.javaml.core.Instance;
import net.sf.javaml.distance.DistanceMeasure;

/**
 * TODO uitleg
 * 
 * @author Andreas De Rijcke
 */
public class WB implements ClusterEvaluation {
    public WB(DistanceMeasure dm) {
        this.dm = dm;
    }

    private DistanceMeasure dm;

    public double score(Dataset[] datas) {
        double dw = 0, fw = 0;
        double db = 0, fb = 0;

        for (int i = 0; i < datas.length; i++) {
            for (int j = 0; j < datas[i].size(); j++) {
                Instance x = datas[i].instance(j);
                // calculate sum of intra cluster distances dw and count their
                // number.
                for (int k = j + 1; k < datas[i].size(); k++) {
                    Instance y = datas[i].instance(k);
                    double distance = dm.measure(x, y);
                    dw += distance;
                    fw++;
                }
                // calculate sum of inter cluster distances dw and count their
                // number.
                for (int k = i + 1; k < datas.length; k++) {
                    for (int l = 0; l < datas[k].size(); l++) {
                        Instance y = datas[k].instance(l);
                        double distance = dm.measure(x, y);
                        db += distance;
                        fb++;
                    }
                }
            }
        }
        double wb = (dw / fw) / (db / fb);
        return wb;
    }

    public boolean compareScore(double score1, double score2) {
        // should be minimized ( smallest intra cluster distances)
        return score2 < score1;
    }
}
