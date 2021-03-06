
## 1.2

This release includes change to view constructor arguments, huge JavaScript overhaul and clean-up,
refactored jsModal implementation, refactor of Table::addColumn() and Table::addField(), integration
with Wordpress and a lot of new documentation.

This release was possible thanks to our new contributors:
 - [ibelar](https://github.com/ibelar)
 - [TheGrammerNazi](https://github.com/TheGrammerNazi)
 - [Darkside666](https://github.com/Darkside666)

### Major Changes
 - Refactored View arguments. `$button = new Button($label, $class)` instead of using arrays. Backwards compatible.
 - Migrated to [Agile Core 1.3](https://github.com/atk4/core/releases/tag/1.3.0) and [Agile Data 1.2.1](https://github.com/atk4/data/releases/tag/1.2.1)
 - Added support for Tabs 
 - Added notify.js #205
 - Add Callback::triggered() method.  #226
 - Refactored JS Plugin System. ATK now implements: #189, #201, #193, #202
   - spinner (link to doc needed)
   - reloadView (link to doc needed)
   - ajaxec (link to doc needed)
   - createModal (link to doc needed)
 - Refactored addField() and addColumn() #179 #187 #223 #225

### Other changes 
 - Documentation improvements:
   - Callbacks and Virtual pages #200 (http://agile-ui.readthedocs.io/en/latest/core.html#callbacks-and-virtual-pages)
   - README file #196
   - Add documentation for icon, image, label, loremipsum, message, tablecolumn, text, decorators. #218
 - Fixed problem with Checkbox on a form #130
 - Fixed form submission with Enter #173
 - Improved form validation #191
 - Fix label display when it's 0 #198
 - Cleanups #207 #218
 - Switched to codecov.io for a more serious coverage reports (will focus on improving those)

### Minor releases (in reverse order)

#### 1.2.1

 - fixed warning in PHP 5.6.x for `function(string $name)`.


## 1.1

A massive release containing unimaginable amount of new features, fixes and actually the first version
of Agile Data that allows you to actually build nice apps with it.

### Major Features
- Added CRUD component to add, edit, delete and add records to your data sets #105, 
- Added Advanced Grid now supporting checkbox column, actions, multiple formatters, anonymous columns, and delete
- .. also Renamed old Grid into Table, #118 #84 #83 #93 #95 #64
- Added QuickSearch #107 
- Added Paginator
- Added Form Model, Validation support
- Added Form Fields: Textarea, Dropdown
- Added Automated multi-column layout FormLayout\Columns
- Added support for stickyGet #131
- Added jsModal() for dialogs #124 #71
- Added jsReload() with argument support and spinner #51 #66 #78 #79 
- Added Message #100
- Added Label #88
- Added Columns #65
- Added JS Library #73
- Form can edit all field types of from Agile Data
- Renamed Grid into Table

### New Demo Pages
- Layouts #123 #113
- Form / Multi-column layout
- Grid / Table Interactions
- Grid / Table+Bar+Search+Paginator
- Grid / Interactivity - Modals
- Crud
- View demo #104
- Message
- Labels
- Menu #96 #97 
- Paginator
- Interactivity / Element Reloading
- Interactivity / Modal Dialogs
- Interactivity / Sticky GET
- Interactivity / Recursive Views

### Fixes
- Bugfixes #111, #86, #85

### Minor changes
- Upgraded to Agile Core 1.2 #129
- Field->jsInput()
- App->requireJS() #120 #50
- Remaned all .jade files into .pug #89
- Renamed namespace Column into TableColumn

Full diff: https://github.com/atk4/ui/compare/1.0.3...1.1.0

### Minor releases (in reverse order)

#### 1.1.1

- Use proper CDN for 3rd party CSS/JS code #150
- Add support for 'password' type #143
- Fix bad error with addColumn() when using non-existant field #134
- Option for Money Table Column to hide zero values #152
- Fix reloading bug #149
- Improve exit; support in callbacks #151
- Other bugfixes #133

#### 1.1.2

- Implemented Grid / Table sorting #163
- CRUD look and feel improvements #156
- Added support for passing arguments into on('', function($arg)) from JS
- Bugfixes #164

#### 1.1.3

- Improve UI layout and add responsivitiy #170
- Documentation restructure, new Overview section, many more screenshots #154
- Added support for multiple formatters in Table. You can use 'addColumn' with existing column. #162
- Added type 'text', improve how 'money', date and time appear on a form. #165
- Improve the way hasOne relations are displayed on the form #165 (dropdowns)
- Fix linking to JS libraries in the CDN
- Bugfixes in Menu
- Renamed `$layout->leftMenu` into `$layout->menuLeft` to follow principle of "Left/Right" always being last word.

#### 1.1.4

- Improve CDN handling. Using `$app->cdn = false` will disable it.

#### 1.1.5 - 1.1.9 (multiple releases)

Probably the last big release before 1.2.x

 - Added new Form Validation implementation #177
 - Table totals can now include min, max and count #178
 - Refactored asset includes (can now be cached locally) #181
 - Footer now indicates version

#### 1.1.10

 - Fix warning in database demos
 - Fix detection of local public files for demos
 - Fix Delete button in crud (couldn't be clicked twice)
 - Enabled App to have dynamic methods
 - Fixed bug in Status column
 - Fixed stickyURL #185
 - Improved compatibility with custom JS renderers (for wordpress integration)
 - Fixed centered layout #186
 - "get-assets.php" now creates 'public' folder, usable in your project

## 1.0 Release

* Implement Grid
* Many improvements everywhere
* Simpler execution
* First stable release

### Minor Releases

#### 1.0.2

* Button::$rightIcon renamed into $iconRight to follow global pattern
* Removed depreciated classes H2, Fields and MiniApp
* Cleaned up demos/button.php
* Added documentation for Button class
* Refactored Button internals (simplified), now uses button.html
* Added comments for a Form
* Cleaned up Grid type-hinting
* Added example for top/bottom attached buttons to Grid.
* You can disable "header" for grid now

#### 1.0.1

Qucik post-release bugfixes

#### 1.0.0

## Pre-Releases

### 0.4

* Implemented Layouts (Admin / Centered) #33
* Created nicer demos

### 0.3

* Implemented js() and on() #20
* Implemented Server-Side JS calls #28
* Implemented Form #29 and #30
* Enhanced documentation

### 0.2

* Implemented Render Tree
* Implemented Template-based Rendering #15
* Implemented Basic View #16
* Implemented Button (based around Semantic UI)
* Implemented JavaScript events
* Advanced JSChains (enclosing, etc) #18
* Implemented Very Basic Layouts

### 0.1

* Initial Release
* Bootstraped Documentation (sphinx-doc)
* Implemented CI
