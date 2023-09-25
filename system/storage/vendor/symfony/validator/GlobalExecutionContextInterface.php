<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator;

/**
 * Stores the node-independent state of a validation run.
 *
 * When the validator validates a graph of objects, it uses two classes to
 * store the state during the validation:
 *
 * <ul>
 * <li>For each node in the validation graph (objects, properties, getters) the
 * validator creates an instance of {@link ExecutionContextInterface} that
 * stores the information about that node.</li>
 * <li>One single <tt>GlobalExecutionContextInterface</tt> stores the state
 * that is independent of the current node.</li>
 * </ul>
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated since version 2.5, to be removed in 3.0.
 *             Use {@link Context\ExecutionContextInterface} instead.
 */
interface GlobalExecutionContextInterface
{
    /**
     * Returns the violations generated by the validator so far.
     *
     * @return ConstraintViolationListInterface A list of constraint violations
     */
    public function getViolations();

    /**
     * Returns the value at which validation was started in the object graph.
     *
     * @return mixed The root value
     *
     * @see ExecutionContextInterface::getRoot()
     */
    public function getRoot();

    /**
     * Returns the visitor instance used to validate the object graph nodes.
     *
     * @return ValidationVisitorInterface The validation visitor
     */
    public function getVisitor();

    /**
     * Returns the factory for constraint validators.
     *
     * @return ConstraintValidatorFactoryInterface The constraint validator factory
     */
    public function getValidatorFactory();

    /**
     * Returns the factory for validation metadata objects.
     *
     * @return MetadataFactoryInterface The metadata factory
     */
    public function getMetadataFactory();
}
