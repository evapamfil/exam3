# Calculator

![](3yw1gnyx1pw01.jpg)

## 🎯 Objectifs

Créer une petite calculette en programmation objet qui permet de calculer des additions et des divisions en se basant sur les tests unitaires fournis.

## 🕺 Etapes à suivre (recommandé)

1. Créer l'autoload PSR-4 via Composer
2. Créer la classe `Addition`
3. Créer la classe `Division`
4. Créer la classe `Calculator`

## 😉 Indices

- La méthode `setOperands()` se trouve sur la classe `Addition` et la classe `Division` : faire hériter ces classes d'une méthode abstraite pour éviter la duplication de code.
- Les classes `Addition` et `Division` utilisent toujours la méthode `calculate()` pour faire les calculs : implémenter une interface sur ces classes pour obliger ces classes qui dépendent maintenant de cette interface à implémenter cette méthode `calculate()`.