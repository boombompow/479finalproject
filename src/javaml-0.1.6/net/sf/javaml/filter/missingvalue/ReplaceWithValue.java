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
package net.sf.javaml.filter.missingvalue;

import net.sf.javaml.core.Instance;
import net.sf.javaml.filter.AbstractFilter;

/**
 * Replaces all Double.NaN and Double.Infinity values with a fixed value.
 * 
 * 
 * @author Thomas Abeel
 * 
 */
public class ReplaceWithValue extends AbstractFilter {

    private double d;

    public ReplaceWithValue(double d) {
        this.d = d;
    }

    public void filter(Instance inst) {
        for (int i = 0; i < inst.noAttributes(); i++) {
            if (Double.isNaN(inst.value(i))||Double.isInfinite(inst.value(i)))
                inst.put(i, d);

        }

    }

}
