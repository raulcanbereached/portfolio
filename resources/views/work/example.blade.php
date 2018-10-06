<div  id="example" class="sample-container">
  <div class="example-background">
    <img src="./media/photos/ExampleBackground.png">
  </div>
  <div class="sample-hud">
    <h1>Sample Work:</h1>
    <h1>Contribution Tracker</h1>
  </div>
  <div class="sample-body-1">
    <ul class="sample-list">
      <li>
        <h1>Background Information</h1>
        <p>A company has multiple groups of agents that function at different
          skill levels. In order to identify areas of strength and opportunity
          for each individual agent, they are asked to track contributions made
          in three categories: Teamwork, Personal Innovation, and Results.</p>

        <p>Agents are expected to meet with their respective managers to discuss
          logged contributions and set tangable goals to achieve progress during each
          quarter of the company's fiscal year.</p>
        <h3 id="sample-bottom-line">Bottom Line:</h3>
        <p>The more frequently agents log contributions, the more accurately an
          agent's progress is measured.</p>
      </li>
      <li>
        <h1>The Issue</h1>
        <p>There is currently no systematic way of logging agent contributions.
          Often times, during quarterly meetings with their manager, agents have
          a smaller-than-expected list of logged contributions. Due to the busy nature
          of their role, agents often find themselves logging contributions at the
          last minute often times forgetting key contributions that indicate progress
          for goals set in previous quarters.</p>
      </li>
      <li>
        <h1>Desired Expectations</h1>
        <p>I sought the feedback of advisors and asked why logging of contributions
          didn't happen with more frequency during the quarter. This assisted in
          setting proper requirements for my solution.</p>
          <div class="requirements">
            <h3>Requirements</h3>
            <p>It should be readily-accessible.</p>
            <p>It should not take up excessive screen space.</p>
            <p>It should be able to log a contribution across multiple categories.</p>
            <p>It should eliminate the need for transcribing contributions manually to
              format desired by management.</p>
            <p>It should have the ability to track date and time of logged contributions.</p>
            <p>It should have the ability to produce a hard-copy of contributions.</p>
            <p>It should be able to store logged contributions for different quarters of the year.</p>
          </div>

      </li>
      <li>
        <h1>My Solution</h1>
        <h3>The Draft</h3>
        <p>I drafted a few ideas and a solution began taking shape. In my first draft
          I explored the functional aspects of the tool. It would have 3 sections to
          display sorted contribution types. It would have 1 text area where all contributions
          would be entered. It would have a series of toggles to be able to select how to
          categorize the contribution entered, and a save button that would commit
          the contribution and log them respectively. I used Apache POI to enable the tool
          to create formatted spreadsheets of logged contributions as requested by management.
          The tool was also given the ability to store contributions on an external
          file so as to make the process of creating and archiving a backup of contributions simple.</p>
        <img src="./media/photos/TrackerSkeleton.png">

        <h3>Visual Design</h3>
        <p>The second iteration focused on the GUI. In a poll taken, agents seemed to prefered a
          dark theme. Agents didn't want to hassle with menus, or waste time "searching for the
          right buttons." I focused on creating a practical, bold design - easily understood
          upon first use - as agents have no time to waste during their shifts.</p>
        <img src="./media/photos/TrackerFull.png">

        <h3>Fine Tuning</h3>
        <p>The final step was making sure that the tool was readily available without
          it taking up excessive real estate on the agent's screen. I decided to make
          the tool's history areas collapsible and make the program wiget-like.
          Agents would have the ability push the tool off to a corner of the screen,
          but still have immediate access to review, edit, and clear any logged contributions
          made from the widget view by expanding the tool.</p>
        <img id="widget" src="./media/photos/TrackerWidget.png">
        <img id="actual-size" src="./media/photos/ActualSize.png">
      </li>
      <li>
       <h1>Follow Up</h1>
       <p>Since it was put into place, quarterly meetings have been reported to be more
       productive. This tool has aided in providing a more acurate record of agent contributions
       through out a given quarter as there are more logged items for managers to review and
       address. To the benefit of the agents using the tool, the history kept in it
       reflects measurable progress they can present each quarter as well as during their
       yearly reviews.</p>
       <p>ADDED BONUS: It has helped agents justify merit, wage, and salary increases!</p>
      </li>
    </ul>
  </div>
</div>
