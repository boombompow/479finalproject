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
package net.sf.javaml.core.exception;

/**
 * Indicates that the algorithm that throws this exception should have been
 * trained prior to point the exception was thrown. Typically this implies that
 * the build method of a particular algorithm has not yet been called.
 * 
 * @author Thomas Abeel
 * 
 */
public class TrainingRequiredException extends RuntimeException {

    private static final long serialVersionUID = 1774207131386358008L;

    public TrainingRequiredException() {
    }

    public TrainingRequiredException(String arg0) {
        super(arg0);
    }

    public TrainingRequiredException(Throwable arg0) {
        super(arg0);
    }

    public TrainingRequiredException(String arg0, Throwable arg1) {
        super(arg0, arg1);
    }

}
