# Testing 101 (explanation)

Testing is not about blame ... it's not about proving who's right or had the better solution to a certain problem. 

It's not about testing only the "happy" path, you need to test what happens when things get sad.  

So check if exceptions that you expect do get thrown, check if users get redirected if they don't have the correct permissions etc.

When using tests and Test Driven Development (TDD) you'll find that you're going to rely on a debugger less and less

## TDD and ATDD
Test-driven development is related to, but different from acceptance test–driven development (ATDD).

TDD is primarily a developer's tool to help create well-written unit of code (function, class, or module) that correctly performs a set of operations. 

ATDD is a communication tool between the customer, developer, and tester to ensure that the requirements are well-defined. TDD requires test automation. 
ATDD does not, although automation helps with regression testing. 

Tests used in TDD can often be derived from ATDD tests, since the code units implement some portion of a requirement. 
ATDD tests should be readable by the customer. TDD tests do not need to be.

## TDD and BDD
BDD (behavior-driven development) combines practices from TDD and from ATDD. 
It includes the practice of writing tests first, but focuses on tests which describe behavior, rather than tests which test a unit of implementation. 

Tools such as Mspec and Specflow provide a syntax which allow non-programmers to define the behaviors which developers can then translate into automated tests.
 
## Workflow in Test Driven Development

#### Add a test
In test-driven development, each new feature begins with writing a test. 

Write a test that defines a function or improvements of a function, which should be very succinct. 
To write a test, the developer must clearly understand the feature's specification and requirements. 

The developer can accomplish this through use cases and user stories to cover the requirements and exception conditions, and can write the test in whatever testing framework is appropriate to the software environment. 
It could be a modified version of an existing test. 

This is a differentiating feature of test-driven development versus writing unit tests after the code is written: 
it makes the developer focus on the requirements before writing the code, a subtle but important difference.

#### Run all tests and see if the new test fails
This validates that the test harness is working correctly, shows that the new test does not pass without 
requiring new code because the required behavior already exists, 
and it rules out the possibility that the new test is flawed and will always pass. 

The new test should fail for the expected reason. This step increases the developer's confidence in the new test.

#### Write the code
The next step is to write some code that causes the test to pass. 
The new code written at this stage is not perfect and may, for example, pass the test in an inelegant way. 

That is acceptable because it will be improved and honed in Step 5.
At this point, the only purpose of the written code is to pass the test. 
The programmer must not write code that is beyond the functionality that the test checks.

#### Run tests
If all test cases now pass, the programmer can be confident that the new code meets the test requirements, and does not break or degrade any existing features. 
If they do not, the new code must be adjusted until they do.

#### Refactor code
The growing code base must be cleaned up regularly during test-driven development. 

New code can be moved from where it was convenient for passing a test to where it more logically belongs. 
Duplication must be removed. Object, class, module, variable and method names should clearly represent their current purpose and use, as extra functionality is added. 

As features are added, method bodies can get longer and other objects larger. 
They benefit from being split and their parts carefully named to improve readability and maintainability, which will be increasingly valuable later in the software lifecycle. 

Inheritance hierarchies may be rearranged to be more logical and helpful, and perhaps to benefit from recognized design patterns. 
There are specific and general guidelines for refactoring and for creating clean code. 

By continually re-running the test cases throughout each refactoring phase, the developer can be confident that process is not altering any existing functionality.

The concept of removing duplication is an important aspect of any software design. 
In this case, however, it also applies to the removal of any duplication between the test code and the production code—for example magic numbers or strings repeated in both to make the test pass when writing the code.

#### Repeat
Starting with another new test, the cycle is then repeated to push forward the functionality. 

The size of the steps should always be small, with as few as 1 to 10 edits between each test run. 
If new code does not rapidly satisfy a new test, or other tests fail unexpectedly, the programmer should undo or revert in preference to excessive debugging. 

Continuous integration helps by providing revertible checkpoints. 
When using external libraries it is important not to make increments that are so small as to be effectively merely testing the library itself, unless there is some reason to believe that the library is buggy or is not sufficiently feature-complete to serve all the needs of the software under development.

## Version management and branch protection.
Because tests don't protect against developers not understanding the issue correctly it's crucial to review the solutions. You could build everything using TDD and still not solve the problem the customer had.

When using Reviews and Pull Request you have another set of eyes viewing not only the question but also the solution.
This ensures knowledge is spread between developers, code gets optimized (Linting, etc) and keeps repositories cleaner and easier to deploy.

- Commit -> PHPlint, Php Code Sniffer, PHP Mess Detector run. If errors are found the commit is rejected.
- Push to repo -> run all tests (when tests fail, the push is rejected) 
- Branch protection with peer reviews using pull requests. A peer can reject the merge. Peer reviews are beyond the scope of this workshop.

### Some tips for test types not covered during the workshop
- Performance
- Scalability
- End to End
- Browser 
- Security
- Usability en Accessibility 

### End to End testing
- Test full use case using all user roles and permissions
- Use real 3rd party intergrations (no mocks!) 
- Do remember to use test data ;-)

### Performance testing (Not functional!)
- Simple metrics (page loads and speed)
- Use Real use cases
- Impact on user experience is vital during this process.

### Scalability testing
- Determine what amount of users you find acceptable (Unique users) to use during testing.
- Load Testing (don't just test the page load, test multiple users / visitors)
- Capacity planning and testing. (If you expect 10.000 visitors, you need to check what happens when that amount logs in at the same time and uses the application.) 

### Security:
- Test the process and not just the code.
- (3rd party) Code audits and penetration testing.
- User training is very important
- "freeze" the Code just before a release, this makes doring penetration testing and code audits easier. 
- If you do create backups you DO have to test them as well.. unless you want Schrodingers Backups (No idea if they are safe untill you need to restore them)

### Usability en Accessibility testing:
- Test using REAL users, do a small beta release and gather as much feedback as you can (heat maps, write a test protocol, etc. )


