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
package net.sf.javaml.matrix;

import java.io.IOException;

public abstract class Matrix {

    public static Matrix create(int cols, int rows) {
        try {
            return new MemoryMatrix(cols, rows);
        } catch (OutOfMemoryError e) {
            System.gc();

            try {
                return new SwapFileMatrix(cols, rows);
            } catch (IOException e1) {
                return null;
            }

        }
    }

    public abstract void put(int col, int row, double value);

    public abstract double get(int col, int row);

    public abstract int rows();

    public abstract int columns();
}
