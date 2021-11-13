# Project Name: Simple Arcade
## Project Summary: This project will create a simple Arcade with scoreboards and competitions based on the implemented game.
## Github Link: https://github.com/ClaytonHeidt/IT202-009/tree/prod/public_html/Project
## Project Board Link: https://github.com/ClaytonHeidt/IT202-009/projects/1
## Website Link: http://cjh47-prod.herokuapp.com/Project/
## Your Name: Clayton Heidt

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] (mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

- **Milestone 1**
  - [x] (11/09/2021) User will be able to register a new account
    - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/register.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/24
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/141250082-fa2811ee-dbba-451b-a59b-22b154c19ba0.png)
          - Screenshot #1 description: Username, email, password, confirm password fields and email forms
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/141256697-bc25af47-4204-4ba2-b163-6abf66fbfe5e.png)
          - Screenshot #2 description: Email validation 
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/141250346-82bbe039-e9c3-45be-aaf5-30895b2d4b0c.png)
          - Screenshot #3 description: Username is required
        - Screenshot #4: ![image](https://user-images.githubusercontent.com/90278160/141255281-09ddc3bf-cf72-4641-b332-1f0350c6f457.png)
          - Screenshot #4 description: password and confirm password must match
        - Screenshot #5: ![image](https://user-images.githubusercontent.com/90278160/141256124-d3cb1cc3-9a10-4f42-af86-bfe25d50b694.png)
          - Screenshot #5 description: Users Table and Password must be hashed
        - Screenshot #6: ![image](https://user-images.githubusercontent.com/90278160/141255120-9a3e3814-564b-4f7b-85b8-a7b815f82eee.png)
          - Screenshot #6 description: Email needs to be unique
        - Screenshot #7: ![image](https://user-images.githubusercontent.com/90278160/141257121-c0784c8b-45bd-43db-8ea3-56a50922467a.png)
          - Screenshot #7 description: Username should be unique AND System should let user know if username or email is taken and allow the user to correct the error without wiping/clearing the form

  - [x] (11/09/2021) User will be able to login to their account (given they enter the correct credentials)
    - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/login.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/24
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/141259999-9a882f36-3b62-4c1a-a524-613bdc3fd88d.png)
          - Screenshot #1 description: (Before) User can login with email or username
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/141260079-30df9981-d976-4a6f-8a39-a957ce886739.png)
          - Screenshot #2 description: (After) User can login with email or username AND User will be directed to a landing page upon login (home page)
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/141259856-09f0af30-f350-44c2-9f04-9ff2be6ff5f6.png)
          - Screenshot #3 description: Password is required
        - Screenshot #4: ![image](https://user-images.githubusercontent.com/90278160/141260481-5e0d0166-4aa1-4b6d-8880-fdaf3a965ff5.png)
          - Screenshot #4 description: User should see friendly error messages when an account either doesn’t exist or if passwords don’t match
        - Screenshot #5: ![image](https://user-images.githubusercontent.com/90278160/141261398-d23a1761-b9e9-4da7-af31-b34b9c2526aa.png)
          - Screenshot #5 description: Logging in should fetch the user’s details (and roles) and save them into the session. (The code for it)

  - [x] (11/09/2021) User will be able to logout
    - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/logout.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/24
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/141263656-60636a62-1ae8-4470-9ea9-dc37f3d234ce.png)
          - Screenshot #1 description: Logging out will redirect to login page
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/141270689-904f3781-6e06-436a-9dbb-469731d1ef38.png)
          - Screenshot #2 description: User should see a message that they’ve successfully logged out
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/141268144-24bc09ac-f5e8-4cfa-8056-68b851e3d90e.png)
          - Screenshot #3 description: Session should be destroyed (so the back button doesn’t allow them access back in)

  - [x] (11/09/2021) Basic security rules implemented
    - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/home.php (Though any page works)
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/24
        - PR link #2: https://github.com/ClaytonHeidt/IT202-009/pull/27
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/141275044-961d507a-a33f-45d8-b4a0-293267f4cdb5.png)
          - Screenshot #1 description: Authentication - Function to check if user is logged in AND Function should be called on appropriate pages that only allow logged in users
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/141275413-95c3b3f2-c2bb-42dd-ad82-a4cac24bf757.png)
          - Screenshot #2 description: Roles/Authorization - Have a roles table

  - [x] (11/09/2021) Basic Roles implemented
    - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/admin/list_roles.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/27
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/141275413-95c3b3f2-c2bb-42dd-ad82-a4cac24bf757.png)
          - Screenshot #1 description: Have a Roles table (id, name, description, is_active, modified, created)
        - Screenshot 2: ![image](https://user-images.githubusercontent.com/90278160/141277402-5cd093e9-5fb1-4220-a3ac-cd40181c6306.png)
          - Screenshot #2 description: Have a User Roles table (id, user_id, role_id, is_active, created, modified)
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/141281040-2ae819d6-4fae-40f0-9036-3ac5ac5e8b68.png)
          - Screenshot #3 description: Function to check if a user has a specific role

  - [x] (11/10/2021) Site should have basic styles/theme applied; everything should be styled
    - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/profile.php (all pages have the same style)
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/29
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/141281516-8bcfd533-0078-47ee-8c66-ab7fa9d0ccf5.png)
          - Screenshot #1 description: Site has basic styles/theme; everything is styled

  - [x] (11/09/2021) Any output messages/errors should be “user friendly”
    - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/register.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/24
        - PR link #2: https://github.com/ClaytonHeidt/IT202-009/pull/26
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/141283699-76b0a462-d3bd-43a8-a890-51ae574bdfbc.png)
          - Screenshot #1 description: output messages/errors are “user friendly”

  - [x] (11/09/2021 of completion) User will be able to see their profile
    - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/profile.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/25
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/141284382-e7e82113-9739-4763-a58c-3ba05b4890b7.png)
          - Screenshot #1 description: User is able to see their profile (email, username, etc.)

  - [x] (11/09/2021) User will be able to edit their profile
    - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/profile.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/25
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/141285320-de305fe0-14f2-4d4a-b629-1cc225325d26.png)
          - Screenshot #1 description: Changing username/email properly checks to see if it’s available before allowing the change
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/141285613-14afa828-eadb-4a7b-84dc-1f0e144d94dc.png)
          - Screenshot #2 description: Any other fields is properly validated
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/141285735-8de99cc3-abaf-464b-955c-d6f10ccbea62.png)
          - Screenshot #3 description: Allow password reset (only if the existing correct password is provided)

- **Milestone 2**
  - [ ] (mm/dd/yyyy of completion) Pick a simple game to implement, anything that generates a score that’s more advanced than a simple random number generator (may build off of a sample from the site shared in class)
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) The system will save the user’s score at the end of the game if the user is logged in
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) The user will be able to see their last 10 scores
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) Create functions that output the following scoreboards (this will be used later)
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

- **Milestone 3**
  - [ ] (mm/dd/yyyy of completion) Users will have points associated with their account
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) Create a PointsHistory table (id, user_id, point_change, reason, created)
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) Competitions table should have the following columns (id, name, created, duration, expires (now + duration), current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out (boolean), min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created, modified)
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) User will be able to create a competition
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) Each new participant causes the Reward value to increase by at least 1 or 50% of the joining fee rounded up
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) Have a page where the User can see active competitions (not expired)
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) Will need an association table CompetitionParticipants (id, comp_id, user_id, created)
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) User can join active competitions
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) Create function that calculates competition winners
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

- Milestone 4
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board