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
  - [x] (11/26/2021) Pick a simple game to implement, anything that generates a score that’s more advanced than a simple random number generator (may build off of a sample from the site shared in class)
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/game.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/56
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/144173522-11c20168-9df9-4a7c-8736-0d68da2d4e26.png)
          - Screenshot #1 description: The current state of my arcade shooter game called "Star Shooter". Check the GitHub pull request page for full description of Star Shooter.

  - [x] (11/30/2021) The system will save the user’s score at the end of the game if the user is logged in
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/game.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/57 
        - PR link #2: https://github.com/ClaytonHeidt/IT202-009/pull/59
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/144174181-97cff307-32c7-47b6-aca0-a5ee9e0359b7.png)
          - Screenshot #1 description: scores table (id, user_id, score, created) created in the database.
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/144174256-796aba1f-f71a-475d-b5aa-0cef701b51b2.png)
          - Screenshot #2 description: Each received score is a new entry (scores will not be updated)

  - [x] (11/30/2021) The user will be able to see their last 10 scores
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/profile.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/60
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/144174884-4bd09b7d-62e4-4042-8928-d9b5cc9b7407.png)
          - Screenshot #1 description: scores are shown on user's profile page and ordered by most recent

  - [x] (11/30/2021) Create functions that output the following scoreboards (this will be used later)
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/home.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/60
        - PR link #2: https://github.com/ClaytonHeidt/IT202-009/pull/62
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/144175451-91a97b29-d196-43b8-a3f7-676047dd9acf.png)
          - Screenshot #1 description: Top 10 Weekly scoreboard
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/144176139-c16967da-9da9-494e-8c2b-848abfec0aa0.png)
          - Screenshot #2 description: Top 10 Monthly scoreboard
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/144176185-ebcda546-7709-432a-9e7c-aebee84811da.png)
          - Screenshot #3 description: Top 10 Lifetime scoreboard
        - Screenshot #4: ![image](https://user-images.githubusercontent.com/90278160/145660547-987b3e16-ada3-4b11-a7be-aa25ca81bd40.png)

          - Screenshot #4 description: Code that shows that scoreboards should show no more than 10 results and if there are no results a proper message will be displayed

- **Milestone 3**
  - [x] (12/9/2021) Users will have points associated with their account
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/profile.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/69
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/146278294-9bef0baa-d010-417b-87e6-6ab5b41e9b31.png)
          - Screenshot #1 description: Alter the User table to include points with a default of 0 (007_alter_table_user_points.sql)
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/146278335-8bbec251-e485-4f5e-bd2a-6c62fc86c0c1.png)
          - Screenshot #2 description: Alter the User table to include points with a default of 0 (Users table)
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/146278168-346d5147-5a36-4f1c-b2d2-f580f3f678cf.png)
          - Screenshot #3 description: Points should show on their profile page

  - [x] (12/13/2021) Create a PointsHistory table (id, user_id, point_change, reason, created)
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/sql/008_create_table_table_pointshistory.sql
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/81
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/146278713-b7104613-86b5-4021-8a8d-90cb8de458de.png)
          - Screenshot #1 description: Create a PointsHistory table (id, user_id, point_change, reason, created) (008_create_table_table_pointhistory.sql)
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/146278802-3111499d-5461-4df4-a20f-f28a9365ef86.png) 
          - Screenshot #2 description: Created PointsHistory table
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/146278963-aa3604d0-6db8-456a-aaec-60057f1c638f.png)
          - Screenshot #3 description: Any new entry should update the user’s points value (do not update the User points column directly), SUM the point_change for the user_id to get the total

  - [x] (12/13/2021) Competitions table should have the following columns (id, name, created, duration, expires (now + duration), current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out (boolean), min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created, modified)
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/sql/009_create_table_competitions.sql
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/84
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/145913126-5989dc81-f705-4048-a1ea-88356212ae7a.png)
          - Screenshot #1 description: Competitions table (first half)
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/145913166-cbc4ef7f-b3c1-41f6-ac90-bfc80b9024e2.png)
          - Screenshot #2 description: Competitions table (second half)
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/145913460-1ec5596e-359c-4d00-8860-3a68c14ae060.png)
          - Screenshot #3 description: 009_create_table_competitions.sql file which created Competitions table

  - [x] (12/14/2021) User will be able to create a competition
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/new_competition.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/88
        - PR link #2: https://github.com/ClaytonHeidt/IT202-009/pull/87
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/146289484-2a8a4abd-9d99-4907-85d6-0c763abb4424.png)
          - Screenshot #1 description: Competitions will start at 1 point (reward) & User sets a name for the competition
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/146289635-4775dcec-6cfc-44f7-a928-6b2177613832.png)
          - Screenshot #2 description: Combination must be equal to 100% (no more, no less) & Show any user friendly error messages
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/146289762-86d585c7-3be6-4b9f-bacc-b65d9031cc97.png)
          - Screenshot #3 description: Combination must be equal to 100% (no more, no less) (new_competition.php)
        - Screenshot #4: ![image](https://user-images.githubusercontent.com/90278160/146289829-0c983aa4-b603-425d-8dc1-d33d0913456c.png)
          - Screenshot #4 description: User determines % given for 1st, 2nd, and 3rd place winners
        - Screenshot #5: ![image](https://user-images.githubusercontent.com/90278160/146290190-b8be7e15-ad7d-4a88-a682-c2e53f8439bf.png)
          - Screenshot #5 description: User determines if it’s free to join or the cost to join (min 0 for free)
        - Screenshot #6: ![image](https://user-images.githubusercontent.com/90278160/146290352-2f251438-ff43-457d-ada1-599c4d34be7d.png)
          - Screenshot #6 description: User determines the duration of the competition (in days)
        - Screenshot #7: ![image](https://user-images.githubusercontent.com/90278160/146290641-07101a1d-b430-45b2-b194-f9a623a55769.png)
          - Screenshot #7 description: User can determine the minimum score to qualify (min 0)
        - Screenshot #8: ![image](https://user-images.githubusercontent.com/90278160/146290738-b098fbf0-c0f2-456f-86a4-71ab21813e9c.png)
          - Screenshot #8 description: User determines minimum participants for payout (min 3)
        - Screenshot #9: ![image](https://user-images.githubusercontent.com/90278160/146291127-36daf469-344b-4a9d-bf67-bb2af5d6be17.png)
          - Screenshot #9 description: Show user friendly confirmation message that competition was created
        - Screenshot #10: ![image](https://user-images.githubusercontent.com/90278160/146290888-21338fe0-f41d-4bb1-814c-bd7426530edc.png)
          - Screenshot #10 description: The cost to the creator of the competition will be (1 + starting reward value)
        - Screenshot #11: ![image](https://user-images.githubusercontent.com/90278160/146291017-06700ac8-fcb5-4bb8-95b7-ef4478841767.png)
          - Screenshot #11 description: If they can’t afford it, the competition should not be created & Show any user friendly error messages
        - Screenshot #12: ![image](https://user-images.githubusercontent.com/90278160/146291174-dd386e7c-a7e9-4bb7-be67-f96e0283fbbf.png)
          - Screenshot #12 description: If they can afford it, automatically add them to the competition
 
  - [x] (12/15/2021) Each new participant causes the Reward value to increase by at least 1 or 50% of the joining fee rounded up
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/active_competitions.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/91
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/146132476-68eedf13-49d1-439c-9720-f6f6490d7d29.png)
          - Screenshot #1 description: Each new participant causes the Reward value to increase by at least 50% of the joining fee rounded up (update_participants function within functions.php)
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/146292149-7d1078af-a572-4ce6-87c6-c9d0dd18e95d.png)
          - Screenshot #2 description: Before: competition with 1 participant
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/146292296-8089ad1e-b392-4f77-9eaa-b9dc75231ee5.png)
          - Screenshot #3 description: After: competition with 2 participants

  - [x] (12/14/2021) Have a page where the User can see active competitions (not expired)
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/active_competitions.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/89
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/146293069-8df29dbd-1b1a-4816-bf49-2ebae4b00108.png)
          - Screenshot #1 description: For this milestone limit the output to a maximum of 10 & Order the results by soonest to expire
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/146293783-257e0777-d788-4f41-902b-22bde2f70e68.png)
          - Screenshot #2 description: For this milestone limit the output to a maximum of 10 & Order the results by soonest to expire (code within active_competition.php)

  - [x] (12/14/2021) Will need an association table CompetitionParticipants (id, comp_id, user_id, created)
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/sql/010_create_table_competitionparticipants.sql
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/85
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/145940866-569dcd71-68cb-4bba-abae-47ca04ffde05.png)
          - Screenshot #1 description: Comp_id and user_id should be a composite unique key (user can only join a competition once) (CompetitionParticipants table)
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/145940929-686d98b6-9ad5-43fa-a527-d5b45ec32a62.png)
          - Screenshot #2 description: Comp_id and user_id should be a composite unique key (user can only join a competition once) (010_create_table_competitionparticipants.sql)

  - [x] (12/15/2021) User can join active competitions
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/active_competitions.php
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/90
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/146128908-3095e9cb-40b0-4358-b104-0f649b474c59.png)
          - Screenshot #1 description: Creates an entry in CompetitionParticipants
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/146294164-ab591610-0b4e-4eec-a9e6-a38872f8cc7b.png)
          - Screenshot #2 description: Recalculate the Competitions.participants value based on the count of participants for this competition from the CompetitionParticipants table
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/146129012-74b8a87f-7b37-4b76-b000-f68be320b179.png)
          - Screenshot #3 description: Update the Competitions.reward based on the # of participants and the appropriate math from the competition requirements above
        - Screenshot #4: ![image](https://user-images.githubusercontent.com/90278160/146294732-dd85125b-ed39-4af4-a187-b4e1143b4c2c.png)
          - Screenshot #4 description: Show proper error message if user is already registered
        - Screenshot #5: ![image](https://user-images.githubusercontent.com/90278160/146292296-8089ad1e-b392-4f77-9eaa-b9dc75231ee5.png)
          - Screenshot #5 description: Show proper confirmation if user registered successfully

  - [x] (12/15/2021) Create function that calculates competition winners
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://cjh47-prod.herokuapp.com/Project/view_competition.php?id=30
      - Pull Requests
        - PR link #1: https://github.com/ClaytonHeidt/IT202-009/pull/92
      - Screenshots
        - Screenshot #1: ![image](https://user-images.githubusercontent.com/90278160/146295083-84ad643f-7c7a-4f96-95f1-08413f4a26a7.png)
          - Screenshot #1 description: Get all expired and not paid_out competitions & For each competition: Check that the participant count against the minimum required
        - Screenshot #2: ![image](https://user-images.githubusercontent.com/90278160/146295083-84ad643f-7c7a-4f96-95f1-08413f4a26a7.png)
          - Screenshot #2 description: Get the top 3 winners: **Option 2**: Where the score was earned/created between when the user joined the competition and when the Competition expires
        - Screenshot #3: ![image](https://user-images.githubusercontent.com/90278160/146295704-5a0313d7-bc4a-45c6-8dc4-e6eea77e108b.png)
          - Screenshot #3 description: Calculate the payout (reward * place_percent) (Round up the value (it’s ok to pay out an extra point here and there))
        - Screenshot #4: ![image](https://user-images.githubusercontent.com/90278160/146296069-746952fd-cea3-446f-82a3-c69e9622a538.png)
          - Screenshot #4 description: Create entries for the Users in the PointsHistory table (Apply the new values (SUM) to their points column in the Users table after entry is added & Reason should be recorded as ‘competition’ (or something with more precise information)) (Evidence from the PointsHistory table)
        - Screenshot #5: ![image](https://user-images.githubusercontent.com/90278160/146295598-7252dbcc-db75-4700-9399-ac1f17052581.png)
          - Screenshot #5 description: Create entries for the Users in the PointsHistory table (Apply the new values (SUM) to their points column in the Users table after entry is added & Reason should be recorded as ‘competition’ (or something with more precise information)) (Evidence from functions.php)
        - Screenshot #6: ![image](https://user-images.githubusercontent.com/90278160/146296290-d7006ecf-a477-462e-a9ba-08360ce0c1a8.png)
          - Screenshot #6 description: Mark the competition as paid_out = true (Evidence from functions.php)
        - Screenshot #7: ![image](https://user-images.githubusercontent.com/90278160/146296399-04cdd1a7-a572-444b-8ed8-ed7d9c941611.png)
          - Screenshot #7 description: Mark the competition as paid_out = true (Evidence from Competitions table)

- **Milestone 4**
  - [ ] (mm/dd/yyyy of completion) User can set their profile to be public or private (will need another column in Users table)
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) User will be able to see their competition history
      -  List of Evidence of Feature Completion
        - Status: Pending (Completed, Partially working, Incomplete, Pending)
        - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
        - Pull Requests
          - PR link #1 (repeat as necessary)
        - Screenshots
          - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
            - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) User with the role of “admin” can edit a competition where paid_out = false
      -  List of Evidence of Feature Completion
        - Status: Pending (Completed, Partially working, Incomplete, Pending)
        - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
        - Pull Requests
          - PR link #1 (repeat as necessary)
        - Screenshots
          - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
            - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) Add pagination to the Active Competitions view
      -  List of Evidence of Feature Completion
        - Status: Pending (Completed, Partially working, Incomplete, Pending)
        - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
        - Pull Requests
          - PR link #1 (repeat as necessary)
        - Screenshots
          - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
            - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) Anywhere a username is displayed should be a link to that user’s profile
      -  List of Evidence of Feature Completion
        - Status: Pending (Completed, Partially working, Incomplete, Pending)
        - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
        - Pull Requests
          - PR link #1 (repeat as necessary)
        - Screenshots
          - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
            - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) Viewing an active or expired competition should show the top 10 scoreboard related to that competition
      -  List of Evidence of Feature Completion
        - Status: Pending (Completed, Partially working, Incomplete, Pending)
        - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
        - Pull Requests
          - PR link #1 (repeat as necessary)
        - Screenshots
          - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
            - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) Game should be fully implemented/complete by this point
      -  List of Evidence of Feature Completion
        - Status: Pending (Completed, Partially working, Incomplete, Pending)
        - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
        - Pull Requests
          - PR link #1 (repeat as necessary)
        - Screenshots
          - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
            - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) User’s score history will include pagination
      -  List of Evidence of Feature Completion
        - Status: Pending (Completed, Partially working, Incomplete, Pending)
        - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
        - Pull Requests
          - PR link #1 (repeat as necessary)
        - Screenshots
          - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
            - Screenshot #1 description explaining what you're trying to show

  - [ ] (mm/dd/yyyy of completion) Home page will have a weekly, monthly, and lifetime scoreboard
      -  List of Evidence of Feature Completion
        - Status: Pending (Completed, Partially working, Incomplete, Pending)
        - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
        - Pull Requests
          - PR link #1 (repeat as necessary)
        - Screenshots
          - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
            - Screenshot #1 description explaining what you're trying to show
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