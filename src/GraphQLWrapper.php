<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

declare(strict_types=1);

namespace Malukenho\GraphQL;

use GraphQL\Executor\ExecutionResult;
use GraphQL\Executor\Promise\Promise;
use GraphQL\Executor\Promise\PromiseAdapter;
use GraphQL\GraphQL;
use GraphQL\Type\Schema;

/**
 * For more information about the methods see {@see \GraphQL\GraphQL}.
 *
 * @author Jefersson Nathan <malukenho@phpse.net>
 * @license MIT
 */
final class GraphQLWrapper /* extends GraphQL */
{
    public function __construct()
    {
        if (! class_exists(GraphQL::class)) {
            throw new \RuntimeException(sprintf(
                '"%s" class not found. Are you sure you have "%s" installed?',
                GraphQL::class,
                'webonyx/graphql-php'
            ));
        }
    }

    public function executeQuery(
        Schema $schema,
        $source,
        $rootValue = null,
        $context = null,
        $variableValues = null,
        $operationName = null,
        callable $fieldResolver = null,
        array $validationRules = null
    ): ExecutionResult {
        return GraphQL::executeQuery(...\func_get_args());
    }

    public function promiseToExecute(
        PromiseAdapter $promiseAdapter,
        Schema $schema,
        $source,
        $rootValue = null,
        $context = null,
        $variableValues = null,
        $operationName = null,
        callable $fieldResolver = null,
        array $validationRules = null
    ): Promise {
        return GraphQL::promiseToExecute(...\func_get_args());
    }

    public function execute(
        Schema $schema,
        $source,
        $rootValue = null,
        $contextValue = null,
        $variableValues = null,
        $operationName = null
    ) {
        return GraphQL::execute(...\func_get_args());
    }

    public function executeAndReturnResult(
        Schema $schema,
        $source,
        $rootValue = null,
        $contextValue = null,
        $variableValues = null,
        $operationName = null
    ) {
        return GraphQL::executeAndReturnResult(...\func_get_args());
    }

    public function getStandardDirectives(): array
    {
        return GraphQL::getStandardDirectives();
    }

    public function getStandardTypes(): array
    {
        return GraphQL::getStandardTypes();
    }

    public function getStandardValidationRules(): array
    {
        return GraphQL::getStandardValidationRules();
    }

    public function setDefaultFieldResolver(callable $fn): void
    {
        GraphQL::setDefaultFieldResolver(...\func_get_args());
    }

    public function setPromiseAdapter(PromiseAdapter $promiseAdapter = null): void
    {
        GraphQL::setPromiseAdapter(...\func_get_args());
    }

    public function getInternalDirectives(): array
    {
        return GraphQL::getInternalDirectives();
    }
}
