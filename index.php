<?php

// Абстрактна фабрика
interface AbstractFactory {
    public function createProductA(): AbstractProductA;
    public function createProductB(): AbstractProductB;
}

// Абстрактний продукт A
interface AbstractProductA {
    public function getName();
}

// Абстрактний продукт B
interface AbstractProductB {
    public function getDescription();
}

// Конкретна реалізація абстрактної фабрики
class ConcreteFactory implements AbstractFactory {
    public function createProductA(): AbstractProductA {
        return new ConcreteProductA();
    }

    public function createProductB(): AbstractProductB {
        return new ConcreteProductB();
    }
}

// Конкретний продукт A
class ConcreteProductA implements AbstractProductA {
    public function getName() {
        return 'Concrete Product A';
    }
}

// Конкретний продукт B
class ConcreteProductB implements AbstractProductB {
    public function getDescription() {
        return 'Concrete Product B';
    }
}

// Використання абстрактної фабрики
$factory = new ConcreteFactory();

$productA = $factory->createProductA();
echo $productA->getName(); // Виведе: Concrete Product A

$productB = $factory->createProductB();
echo $productB->getDescription(); // Виведе: Concrete Product B
