<?php
/**
 * Copyright (c) 2017 DarkWeb Design
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace DarkWebDesign\SymfonyAddon\Constraint\Tests;

use PHPUnit_Framework_TestCase;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\Context\ExecutionContext;

abstract class AbstractValidatorTestCase extends PHPUnit_Framework_TestCase
{
    /**
     * @return \Symfony\Component\Validator\Context\ExecutionContext
     */
    protected function createContext()
    {
        $translator = $this->getMock('Symfony\Component\Translation\TranslatorInterface');
        $validator = $this->getMock('Symfony\Component\Validator\Validator\ValidatorInterface');

        return new ExecutionContext($validator, 'root', $translator);
    }

    /**
     * @param string $message
     * @param array $parameters
     *
     * @return \Symfony\Component\Validator\ConstraintViolation
     */
    protected function createViolation($message, array $parameters = array())
    {
        return new ConstraintViolation(null, $message, $parameters, 'root', '', null);
    }
}
