<?php
$title = "Municipal Election Questionnaire Responses";
$body_class = "election2017";
require_once "../../includes/header.php";
?>
    <section class="letter">
      <p>We asked our 17 candidates for Aldermen to answer nine questions of ours. Below are their answers!</p>

      <p>We note that these candidates abstained from responding:</p>

      <ul class="default">
        <li>Kevin Allen Tarpley (At-Large)</li>
        <li>Bob McWatters (Ward 3)</li>
        <li>Lance Davis (Ward 6)</li>
      </ul>

      <p>We were unable to reach Elio Lorusso (Ward 1), so their answers are also not present</p>

      <script>
        $(function() {
          $('input[type="checkbox"]').on('change', function() {
            checkbox = $(this)
            wardName = '.' + checkbox.attr('name')
            if (checkbox.prop('checked')) {
              $(wardName).show()
            } else {
              $(wardName).hide()
            }
          })
        })
      </script>

      <form>
        <fieldset>
          <p>If you would like to filter these responses for the ones relevant to you, please uncheck those you’d like to hide.</p>
          <label><input type="checkbox" name="ward2"   checked>Ward 2</label>
          <label><input type="checkbox" name="ward3"   checked>Ward 3</label>
          <label><input type="checkbox" name="ward4"   checked>Ward 4</label>
          <label><input type="checkbox" name="ward5"   checked>Ward 5</label>
          <label><input type="checkbox" name="ward7"   checked>Ward 7</label>
          <label><input type="checkbox" name="atlarge" checked>At-Large</label>
        </fieldset>
      </form>

      <p>We start with five agree/disagree & multiple choice questions. Please be sure to scroll to the right to see all the answers.</p>
    </section>

    <div class="table-container">
      <table class="fixed-headers">
        <thead>
          <tr>
            <th>Names&nbsp;→<br>Questions&nbsp;↓</th>
            <th class="ward1">Matt McLaughlin<br>(Ward 1)</th>
            <th class="ward2">Maryann Heuston<br>(Ward 2)</th>
            <th class="ward2">JT Scott<br>(Ward 2)</th>
            <th class="ward3">Ben Ewen-Campen<br>(Ward 3)</th>
            <th class="ward4">Omar Boukili<br>(Ward 4)</th>
            <th class="ward4">Jesse Clingan<br>(Ward 4)</th>
            <th class="ward5">Mark Niedergang<br>(Ward 5)</th>
            <th class="ward7">Katjana Ballantyne<br>(Ward 7)</th>
            <th class="atlarge">John “Jack” Connolly<br>(At-Large)</th>
            <th class="atlarge">Stephanie Hirsch<br>(At-Large)</th>
            <th class="atlarge">Will Mbah<br>(At-Large)</th>
            <th class="atlarge">Mary Jo Rossetti<br>(At-Large)</th>
            <th class="atlarge">Dennis Sullivan<br>(At-Large)</th>
            <th class="atlarge">Bill White<br>(At-Large)</th>
            <th>←&nbsp;Names<br>↓&nbsp;Questions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1. Greater housing density should be developed around transportation nodes in Somerville.</td>
            <td class="ward1">Strongly Agree</td>
            <td class="ward2">Agree</td>
            <td class="ward2">Agree</td>
            <td class="ward3">Strongly Agree</td>
            <td class="ward4">Strongly Agree</td>
            <td class="ward4">Agree</td>
            <td class="ward5">Strongly Agree</td>
            <td class="ward7">Agree</td>
            <td class="atlarge">Strongly Agree</td>
            <td class="atlarge">Strongly Agree</td>
            <td class="atlarge">Agree</td>
            <td class="atlarge">Neither agree Nor Disagree</td>
            <td class="atlarge">Strongly Agree</td>
            <td class="atlarge">Neither agree Nor Disagree</td>
            <td>1. Greater housing density should be developed around transportation nodes in Somerville.</td>
          </tr>
          <tr>
            <td>2. Somerville should allow taller or larger buildings in certain areas if that increase results in more affordable housing units.</td>
            <td class="ward1">Agree</td>
            <td class="ward2">Agree</td>
            <td class="ward2">Agree</td>
            <td class="ward3">Strongly Agree</td>
            <td class="ward4">Strongly Agree</td>
            <td class="ward4">Agree</td>
            <td class="ward5">Strongly Agree</td>
            <td class="ward7">Agree</td>
            <td class="atlarge">Strongly Agree</td>
            <td class="atlarge">Agree<br></td>
            <td class="atlarge">Strongly Agree</td>
            <td class="atlarge">Neither agree Nor Disagree</td>
            <td class="atlarge">Strongly Agree</td>
            <td class="atlarge">Neither agree Nor Disagree</td>
            <td>2. Somerville should allow taller or larger buildings in certain areas if that increase results in more affordable housing units.</td>
          </tr>
          <tr>
            <td>3. For new construction, the zoning code currently requires 1.5 parking spaces for each one or two bedroom apartment, and 2 parking spaces for each larger apartment. For new construction near transit, zoning should require less parking.</td>
            <td class="ward1">Neither agree Nor Disagree</td>
            <td class="ward2">Strongly Agree</td>
            <td class="ward2">Stongly Agree</td>
            <td class="ward3">Strongly Agree</td>
            <td class="ward4">Strongly Agree</td>
            <td class="ward4">Agree</td>
            <td class="ward5">Strongly Agree</td>
            <td class="ward7">Agree</td>
            <td class="atlarge">Strongly Agree</td>
            <td class="atlarge">Strongly Agree</td>
            <td class="atlarge">Agree</td>
            <td class="atlarge">Neither agree Nor Disagree</td>
            <td class="atlarge">Strongly Agree</td>
            <td class="atlarge">Neither agree Nor Disagree</td>
            <td>3. For new construction, the zoning code currently requires 1.5 parking spaces for each one or two bedroom apartment, and 2 parking spaces for each larger apartment. For new construction near transit, zoning should require less parking.</td>
          </tr>
          <tr>
            <td>4. The development of both market rate and affordable housing helps to reduce the average housing cost and keeps our city diverse. More housing is usually a good idea and should be supported.</td>
            <td class="ward1">Agree</td>
            <td class="ward2">Strongly Agree</td>
            <td class="ward2">No answer</td>
            <td class="ward3">Agree</td>
            <td class="ward4">Agree</td>
            <td class="ward4">Agree</td>
            <td class="ward5">Disagree</td>
            <td class="ward7">Agree</td>
            <td class="atlarge">Strongly Agree</td>
            <td class="atlarge">Neither Agree Nor Disagree</td>
            <td class="atlarge">Agree</td>
            <td class="atlarge">Neither agree Nor Disagree</td>
            <td class="atlarge">No answer</td>
            <td class="atlarge">Neither agree Nor Disagree</td>
            <td>4. The development of both market rate and affordable housing helps to reduce the average housing cost and keeps our city diverse. More housing is usually a good idea and should be supported.</td>
          </tr>
          <tr>
            <td>5. All else being equal, which development proposal sounds better to you?</td>
            <td class="ward1">40 units of housing, with 10 designated affordable</td>
            <td class="ward2">40 units of housing, with 10 designated affordable</td>
            <td class="ward2">No answer</td>
            <td class="ward3">40 units of housing, with 10 designated affordable</td>
            <td class="ward4">40 units of housing, with 10 designated affordable</td>
            <td class="ward4">10 units of housing, with 5 designated affordable</td>
            <td class="ward5">40 units of housing, with 10 designated affordable</td>
            <td class="ward7">40 units of housing, with 10 designated affordable</td>
            <td class="atlarge">10 units of housing, with 5 designated affordable</td>
            <td class="atlarge">No answer</td>
            <td class="atlarge">40 units of housing, with 10 designated affordable</td>
            <td class="atlarge">No answer</td>
            <td class="atlarge">10 units of housing, with 5 designated affordable</td>
            <td class="atlarge">No answer</td>
            <td>5. All else being equal, which development proposal sounds better to you?</td>
          </tr>
        </tbody>
      </table>
    </div>

    <section class="letter">
      <p>Below are our three short answer questions.</p>

      <ul>
        <li><p class="question">6. If you support the construction of more housing in Somerville, what steps should the city take to encourage it?</p>
          <ul>
            <li class="ward1"><strong>Matt McLaughlin (Ward 1):</strong>
              <blockquote><p>The city is poised to pass city wide zoning. I want to increase the affordable housing percentage in exchange for the massive concessions that will benefit developers. I support a compromise if 1 parking space per unit instead of 1.5</p></blockquote>
            </li>

            <li class="ward2"><strong>Maryann Heuston (Ward 2):</strong>
              <blockquote><p>It is essential that to get the kind of responsible development we need that we set the table and expectations for developers through zoning that clearly defines what we need as a city.</p></blockquote>
            </li>

            <li class="ward2"><strong>JT Scott (Ward 2):</strong>
              <blockquote><p>I support balancing construction of more housing units — across the entire cost range — with expanding commercial development. Our infrastructure and city services are woefully underfunded, with Somerville gathering nearly half the per-capita revenue of Cambridge. Combined with the fact that only 15% of Somerville’s residents have jobs in the city, this points to a desperate need to foster timely commercial development — and our zoning should be modified where possible to do so.</p>

              <p>With that said, the current regulatory and zoning regime are needlessly restrictive of homeowner housing modifications and allowing increased density in the neighborhoods. Due to regulatory risks and costs incurred navigating this process, the housing currently produced by condo conversion is almost exclusively at the top end of market pricing - and almost exclusively does not expand housing supply.</p></blockquote>
            </li>

            <li class="ward3"><strong>Ben Ewen-Campen (Ward 3):</strong>
              <blockquote><p>I do support increasing housing supply as an important aspect of addressing our housing affordability crisis, alongside complimentary efforts to curb displacement and to promote as much housing as possible outside the current highly speculative real estate market. The citywide zoning overhaul slated for the upcoming term will be one important way to shape this process. Essentially, the current plans encourage dense development around new Green Line stops, and largely discourage real estate speculation in residential neighborhoods. While I largely agree with these goals, I see much room for improvement: for example, I will push certain forms of increased density in residential neighborhoods that will promote affordability rather than house-flipping and speculation, such as basement units, modestly sized outbuilding units, and incentives for developments in neighborhoods if they are are majority affordable. I am committed to working with local experts and advocates on affordability, transportation, and environmental justice to ensure that the zoning actually delivers on these goals.</p></blockquote>
            </li>

            <li class="ward4"><strong>Omar Boukili (Ward 4):</strong>
              <blockquote><p>The City needs to adopt a new zoning code. As it stands, the current code is obstructive, confusing and is a major driver of construction and general development costs.</p>
              <p>The city needs a zoning code that offers more predictability, encourages mixed uses, offers new parking requirements/policies adapted to current practices (lower parking ratios by transit nodes, “carless” developments etc…).</p>
              <p>We also need to encourage the construction of affordable units in smaller projects, while accept “cash-in-lieu” for these projects to not discourage building under the Inclusionary Zoning trigger number. For example, a developer would choose to build 5 market-rate or luxury units instead of 7 in order to avoid building an affordable within their project. If we took enough cash to allow us to acquire off-site units and make them permanently affordable from that developer, we may be able to get more regular units and ensure that we have enough cash for affordable unit-acquisition in our neighborhoods.</p></blockquote>
            </li>

            <li class="ward4"><strong>Jesse Clingan (Ward 4):</strong>
              <blockquote><p>It doesn’t seem that the City needs to do anything to encourage builders to build more housing. Somerville is a hotspot for developers. There are new housing developments going up all the time. The city needs to ensure that the housing built includes affordable units and that large developers include community benefits packages in their plans.</p></blockquote>
            </li>

            <li class="ward5"><strong>Mark Niedergang (Ward 5):</strong>
              <blockquote><p>Right now, the City’s Somervision goal is 6,000 new housing units from 2010-2030. The Mayor has proposed increasing this to 9,000. I am generally supportive, but want to have a public discussion of this 50% increase before it becomes official. In my view, I do not want more housing in our already dense neighborhoods, except around the coming GLX stations, but there is lots of room for more housing in places like Assembly Square, Boynton Yards, Inner Belt, Brickottom and other areas where there is vacant land or underdeveloped properties. However, I want to say this since there wasn’t an opportunity in previous questions: regardless of how much housing we build in Somerville, it is not going to affect the price. We are in a regional housing market with a need for 435,000 new units in the next 20 years. What we do in Somerville will barely make an impact in terms of the supply-demand equation and the price of housing, no matter how much we build. We can’t build our way out of the affordable housing crisis we face, all we can do is take housing out of the private market and make it permanently affordable.</p></blockquote>
            </li>

            <li class="ward7"><strong>Katjana Ballantyne (Ward 7):</strong>
              <blockquote><p>After a 3 years visioning process including hundreds of community participants the City of Somerville co-created SomerVision. This document identified a goal of 6000 housing units. I am supportive of this.</p></blockquote>
            </li>

            <li class="atlarge"><strong>John “Jack” Connolly (At-Large):</strong>
              <blockquote><p>Streamline permit process to allow for “in-law” type residences for care-givers, elder family members, etc.</p>
              <p>Revamp Zoning regulations to allow construction of an additional one unit,residential dwelling on the existing,lot of a homeowner</p></blockquote>
            </li>

            <li class="atlarge"><strong>Stephanie Hirsch (At-Large):</strong>
              <blockquote>
              <p>To support the goal of increased housing in the greater Boston region, which will help stabilize housing prices, I think the best way Somerville can contribute is by achieving these following (difficult) steps. First, we can build higher-density housing in the transformative districts in ways that ensure the area becomes a real neighborhood, with a mix of residents by life stage, age, and income, and with neighborhood assets like schools, parks, clinics, and grocery stories. Next, we should figure out a way to create permanently car-free units with an enforcement mechanisms that prevents any owner or tenant from having a car principally housed in Somerville. I understand from City planners that there is a legal way to do this — there just isn’t much precedent. Additional cars parked and driving is one of the big complaints about more housing. In general, the best contribution we can make, I think, as one of the nation and region’s most dense city is to demonstrate HOW to succeed at achieving smart-growth goals of continued high density, transit-oriented, but with people still feeling that their community is livable and their neighbors are ones they want nearby. We can be a policy lab for the region, and as we test solutions, we should push for changes at the region and state level. Rep Provost’s recent proposal of the Right of First Refusal is an example of how we can lead the way in changing the state-level conversation about housing. We need to as a community lobby for changes to State law and policy that discourages more construction in other communities, including our education funding and accountability formulas that penalize communities for building family-friendly housing. I am happy that the YIMBY group exists as this seems like a great start at refining housing policy discussion and intensifying the sense of urgency.</p>

              <p>For context, I don’t, however, believe that more housing units in Somerville will lower the costs of housing in Somerville, so I believe we need to be thoughtful about what our community needs. It may even have the opposite effect, unless new housing is specifically designed to be affordable housing. As I’ve been door knocking, the top two worries I have heard residents express are:</p>

              <ol class="default">
                <li>Affordability of living in Somerville (both the cost of housing for renters or people trying to buy, and the cost of taxes/fees/fines for home owners); and</li>
                <li>Anxiety and a sense of powerlessness because of new development and changing neighborhood character.</li>
              </ol>

              <p>I compiled the feedback I got from talking to more than 3,000 people in different neighborhoods here: <a href="https://jcalz.github.io/somerville-word-clouds/">https://jcalz.github.io/somerville-word-clouds/</a>. As we move forward with projects, those two, sometimes competing, needs must be balanced.</p>

              <p>For neighborhood stability, especially in our older neighborhoods (vs. the transformational ones), I think that will need to take into account neighborhood opinions. Also, I think we should work for increased ownership which will, I believe, help stabilize neighborhoods. Though our rate of owner vs. rental has remained relatively stable over the years, in the past, many multi-household buildings were occupied by a landlord who rented to family members or long-time friends. They had more accountability to those tenants and were less likely to raise rents or sell without warning. More stability will give people a peace of mind and help friendships form on each block. We should assess each housing plan, I believe, by its likelihood of increasing neighborhood stability.</p>
              </blockquote>
            </li>

            <li class="atlarge"><strong>Will Mbah (At-Large):</strong>
              <blockquote><p>Better zoning is a good first step. I think we are looking for community partners here in Somerville that are looking to build and contribute in a hot real estate market. I think there should be allowances for building height and density if the benefits come to the community in terms of affordability.</p></blockquote>
            </li>

            <li class="atlarge"><strong>Mary Jo Rossetti (At-Large):</strong>
              <blockquote><p>The upcoming discussions of a city-wide zoning overhaul are not to be taken lightly. These discussions will play a critical role in Somerville’s future. To meet the goals of The SomerVision Plan the Board must take heed of the importance of absolutely assuring increased affordable housing, protecting our neighborhood’s, and delineating sections of our community ready and able to develop the needed additional housing. We must, however, not loose sight of increasing our commercial tax base, bringing with it increased tax revenues to assist us in the offset of lowering Residential costs. There are many options to assist us in this important process. Now is the time to make this the Board’s priority.</p></blockquote>
            </li>

            <li class="atlarge"><strong>Dennis Sullivan (At-Large):</strong>
              <blockquote><p>When dealing with the new zoning, I will consider all proposals to increase affordability including creating incentives to developers who agree to build a higher percentage of affordable housing.</p></blockquote>
            </li>

            <li class="atlarge"><strong>Bill White (At-Large):</strong>
              <blockquote><p>I have essentially stated that I neither agree nor disagree with your statements in questions 2 through 5 because of the nature of the City of Somerville. If we were a blank slate of thousands of acres of undeveloped land, I would probably strongly agree with all of your statements. Somerville, however, is already largely developed and is comprised of a number of different neighborhoods and areas. I might strongly agree with your statements if they applied to certain neighborhoods and strongly disagree with those same statements as applied to other areas. Greater density should, as a general principle, certainly exist in areas around transit nodes. Density competes with important considerations of green and open space and its desirability varies, depending on the area. The considerations of density levels in Union Square would be different than Gilman Square. The City also needs to bring in substantial commercial development in certain areas of the city to take the burden off of the residential homeowner and help pay for the Green Line Extension and the construction of the new High School. So in certain areas of the City such as Boynton Yards, I would prefer to see more commercial development and, in other areas, more residential development. Folks should appreciate the fact that if residential property taxes keep rising, landlords will pass those increases onto renters. Also, because commercial buildings are taxed at a higher rate than residential buildings, if we create even more housing without commercial development, the burden will shift even more on residential property owners. Even the question about whether I would prefer 10 units of housing with 5 affordable or 40 units with 10 affordable would depend on the neighborhood, assuming there was a developer willing to build either. I certainly would not support a 40 unit development on a 10,000 square feet lot in the middle of a residential neighborhood but would likely support the same type of development in Assembly Square, as an example. Outside of Assembly Square, most current housing construction is of the infill variety in residential neighborhoods, I do not think any changes to the zoning is appropriate to promote increased construction in residential neighborhoods. In the transformative districts such as the remainder of Assembly Square, the Inner Belt, Boynton Yards, Twin City and Brick Bottom, development has been delayed for a number of reasons. One was the uncertainty of the Green Line. Another is the lack of necessary infrastructure to many of those areas. Another is the need for developers to have the capital commitments necessary to fund major developments. I believe that zoning changes for the transformative areas should be undertaken to provide for more housing as well as commercial development. We are also discussing infrastructure improvements that could further open up some of the transformative areas.</p></blockquote>
            </li>
          </ul>
        </li>
        <li><p class="question">7. What are some specific policies you would support to increase the number of affordable (subsidized) and attainable (market rate moderately priced) housing units?</p>
          <ul>
            <li class="ward1"><strong>Matt McLaughlin (Ward 1):</strong>
              <blockquote><p>Increase inclusionary rate to 25 percent and allow density bonuses to incentivize affordable units.</p></blockquote>
            </li>

            <li class="ward2"><strong>Maryann Heuston (Ward 2)</strong>
              <blockquote><p>Increase inclusionary rate to 25% for large developments</p>
              <p>Land Banking</p>
              <p>Right of first refusal</p>
              <p>combo inclusionary units with contributions to affordable housing trust fund for development 3-6 units</p></blockquote>
            </li>

            <li class="ward2"><strong>JT Scott (Ward 2)</strong>
              <blockquote><p>Somerville needs a comprehensive zoning overhaul that addresses these significant frictions reducing housing expansion while also taking into account residents valid concerns over quality of life issues in their neighborhoods. I have proposed several measures to address this, including incentives for expanding housing units at mid-level pricing in residential neighborhoods, expanded height in commercial districts, and restrictions on residential parking passes for new units designated as bicycle- or walking-commuter occupied.</p>

              <p>One example of this is in fact the two-family house immediately adjacent to my home in Union Square. Despite being less than a quarter-mile from a planned transit stop, this former rental property is being proposed as a condo conversion at its current height that includes excessive parking spaces and does not take full advantage of the opportunities of the space due to zoning restrictions, as well as dodging our current inclusionary zoning ordinance. I’d much rather see this building, which is framed by commercial properties on all sides and sits squarely in a commercial district, be built upwards to significant height that matches the planned development in the square while providing commercial space at the ground level and providing upper story affordable housing units. This is development that I’d like to see in my literal backyard.</p>

              <p>I do also support increasing the percentage of subsidized housing units in the major developments permitted as high-density/high-rise areas like Union Square and Assembly Row, especially when these developments are enabled by city powers such as exclusive development rights in an MLDA or use of eminent domain.</p></blockquote>
            </li>

            <li class="ward3"><strong>Ben Ewen-Campen (Ward 3)</strong>
              <blockquote><p>I support Alderman Niedergang’s proposal to increase our inclusionary zoning to 25%, as well as increasing our housing linkage fee to generate revenue that can be used for direct investment in housing affordability programs. I also support the Transfer Fee that would generate important revenue for the city to be used specifically on affordable housing through a number of initiatives, including building more housing. I support working with developers to harness every State-level tool we have to promote the building of “workforce housing.” In addition, I am a strong proponent of policies to prevent our “naturally occurring” affordable housing from being flipped to relatively unaffordable stock, including the Tenant’s Right of First Refusal legislation currently working it’s way through the state legislature (H.3017), for which I have testified at the State House.</p></blockquote>
            </li>

            <li class="ward4"><strong>Omar Boukili (Ward 4)</strong>
              <blockquote><p>Allow for enough density is specific areas in order to facilitate a maximum number of these units in new projects. The higher the density, the easier it is for developers to finance those units.</p>
              <p>We need to authorize cash-in-lieu of building in-situ for smaller projects. Please see my last point in my answer to question 7.</p>
              <p>Adopt a form-based type of zoning that would allow for footprint maximization to help create more affordable, attainable and family-oriented units (the city’s proposed code incentivized this).<br>Simplified processes. It has been over 3 years since a master developer was designated for Union Square. We are still far from shovels in the ground. It has been over five years since the Board of Aldermen approved the Union Square Urban Renewal plan. We need to do a better job of considering these plans and proposals. The ability of an elected official to understand the intricacies of these issues is crucial. In addition, the ability to understand that the perfect, however each interest party defines that, is the enemy of the good is paramount. Considering the housing pressures we’re facing, we need supply now.</p></blockquote>
            </li>

            <li class="ward4"><strong>Jesse Clingan (Ward 4)</strong>
              <blockquote><p>I support raising the inclusionary housing rate to 25%. I support the construction of more affordable housing and that needs to include family housing.</p></blockquote>
            </li>

            <li class="ward5"><strong>Mark Niedergang (Ward 5)</strong>
              <blockquote><p>My priority is not necessarily to increase the number of market rate units in Somerville, although I do favor that. My priority, and it should be the City’s is to do everything we possibly can to address our affordable housing emergency by raising funds to provide subsidies to create permanently affordable housing units for middle-income and low-income families. Just building more housing will not keep Somerville a mixed-income, diverse community, since all the new market rate housing, and increasingly even rental apartments, can only be afforded by wealthy people. If all we do is build more housing with a 20% or even 25% inclusionary (affordable) requirement, Somerville will still become a community of predominantly wealthy people. That is not the community I want to live in, nor does it maintain Somerville’s history as a home for immigrants and people from all walks of life.</p></blockquote>
            </li>

            <li class="ward7"><strong>Katjana Ballantyne (Ward 7)</strong>
              <blockquote><p>The City should take a comprehensive approach to keeping Somerville affordable and accessible to families and people of all income levels by both creating affordable housing options and by working to develop the local economy.</p>

              <p>To increase affordable housing options, the City can advocate in support of new affordable housing development and make the case for the benefits to everyone, of affordable housing in terms of maintaining economic diversity and keeping residents and families in their Somerville homes.</p>

              <p>Residents need information about what is coming in the future, and they need help to access resources, the city could work together with local non-profits to give residents information about resources for renters, access to affordable housing programs, access to job training and job placement services. The City should also actively support permitting for developments that meet or exceed affordable housing goals of the Somerville Zoning Ordinance (SZO) and work to meet or exceed the SomerVision Goal of 1200 new units of affordable housing.</p>

              <p>On the economic development side the City can promote planning, permitting and outreach, to add more office space and businesses to the squares and along the main streets, especially class B office space suitable for small and start-up companies, especially R&D start-ups. When Residents have good jobs, they can manage the local cost of living.</p></blockquote>
            </li>

            <li class="atlarge"><strong>John “Jack” Connolly (At-Large)</strong>
              <blockquote><p>Public/Private partnerships such as the proposed 500 unit residential mixed use redevelopment of the SHA North St. Housing complex</p>

              <p>Support tax reduction or abatement for developers who build more than the required 20% inclusionary housing.</p>

              <p>Support additional City spending for the Community Preservation Act funds for permanently affordable home ownership units.</p>

              <p>Support Linkage fee revenue form the Partners Healthcare project be directed to housing development for affordable units close to transformative areas i.e. Green Line T stations.</p></blockquote>
            </li>

            <li class="atlarge"><strong>Stephanie Hirsch (At-Large)</strong>
              <blockquote><p>My top priorities are:</p>
                <ol class="default">
                  <li>Immediately helping each owner access a tax deferral program so as to help improve their day-to-day household finances;</li>
                  <li>Implement each recommendation in the Sustainable Neighborhood Working Group recommendations, and regularly monitor progress on these.</li>
                  <li>Begin work on implementing the more complex initiatives, such as the Right of First Refusal.</li>
                </ol>

                <p>I will post a complete position platform on affordability tomorrow on this site: <a href="http://www.stephanieforsomerville.com/blog">http://www.stephanieforsomerville.com/blog</a></p></blockquote>
            </li>

            <li class="atlarge"><strong>Will Mbah (At-Large)</strong>
              <blockquote><p>We need to increase the current 20% required inclusionary zoning on housing to 25%.</p>

              <p>The city can’t just rely on private development to get us out of our affordable housing crisis. The city itself must take a more active role. IF the city is going to use eminent domain in development projects, it should use some of that land to establish Community Land Trusts that the city itself will build on and provide affordable units for working and middle class families (we are lacking this middle of the market in housing).</p>

              <p>In order to create even more opportunities for community land trusts we need to empower tenants with the right of first refusal or “right to purchase” if their building is sold to be converted to condos. We should allow them to collectively buy the property with 5% down. That 5% down could come partly from community housing organizations or housing trust funds. This would only apply to buildings of 3 or more units that are not owner occupied. You might ask yourself, where is the funding for these projects going to come from? That is why my community land trust idea is tied to a 1% transfer fee tax on real estate speculation in Somerville (properties bought and sold within 3 years of purchase). This money will go straight to affordable housing trust funds and be used to help residents exercise their right to purchase (while also cutting down on too much real estate speculation).</p>

              <p>I think we need a 1% transfer tax on real estate speculation to support these affordable housing measures.</p>

              <p>In addition, I support looking into intergenerational housing initiatives (like Boston) that subsidize elderly homeowners (often with many empty rooms in a house) if they take on younger renters for lower rent than market rate.</p></blockquote>
            </li>

            <li class="atlarge"><strong>Mary Jo Rossetti (At-Large)</strong>
              <blockquote><p>As one example, I wholeheartedly support Rep. Provost’s Bill #H3017. Washington, D.C. has proven its effectiveness. This is but one example of the many ways we must “think outside the box”.</p></blockquote>
            </li>

            <li class="atlarge"><strong>Dennis Sullivan (At-Large)</strong>
              <blockquote><p>I will look to increase the percentage of inclusionary affordable housing and increase the linkage rate commercial development pays into the affordable housing trust fund.</p></blockquote>
            </li>

            <li class="atlarge"><strong>Bill White (At-Large)</strong>
              <blockquote><p>I have already supported the increase in the percentage of affordable units in our inclusionary zoning ordinance. I also support an increase in the linkage fee. Other potential solutions to raise money will require a home rule petition that is approved by the state legislature, such as a transfer tax. That seems to me to be a reasonable approach, but I would like to see long-time Somerville home owners have an exemption. I also supported Rep. Provost’s bill to give a first right of refusal to tenants. It is difficult for me to answer this question as to “attainability” because I do not know your criteria as to income and the percentage of that income to pay for housing in your definition of “attainable” housing. As a general principle under Massachusetts law, municipalities can enact inclusionary housing ordinances that set aside the percentage of affordable units that a developer can be required to construct as part of a development. I believe such an inclusionary ordinance could be amended to add a certain percentage of the affordability requirement to include attainable housing. Other than that, I am not aware of any legal mechanism that a municipality can utilize to directly promote the construction of residential units based on rents. Another option might be for the Trustees of the Affordable Housing Trust Fund to provide financial assistance to developers constructing attainable housing units as part of an overall affordable housing development. I could support this if I agreed with the criteria to determine attainability and the overall distribution of units in the development.</p></blockquote>
            </li>
          </ul>
        </li>
        <li><p class="question">8. What considerations are important to you when evaluating a proposal before the Board that will impact the city’s housing supply, such as a proposed development or zoning change?</p>
          <ul>
            <li class="ward1"><strong>Matt McLaughlin (Ward 1):</strong>
              <blockquote><p>The city wide zoning proposal is an opportunity for more affordable housing, but it could also reduce the community process. I want updated zoning that puts community desires at the forefront.</p></blockquote>
            <li>

            <li class="ward2"><strong>Maryann Heuston (Ward 2):</strong>
              <blockquote><p>Quality of units</p>
              <p>Impacts on neighborhoods</p>
              <p>developer contributions</p>
              <p>open space considerations</p>
              <p>public private partnerships</p></blockquote>
            </li>

            <li class="ward2"><strong>JT Scott (Ward 2):</strong>
              <blockquote><p>First and foremost, major proposed developments must pay their fair share and contribute to the city’s overall goals for housing, jobs, and green space as expressed in Somervision, taking into account that open developable land is a scarce commodity here. We need to look at the big picture when considering these major development agreements. We can do better than what we’ve seen in Assembly Row and Union Square.</p>

              <p>When it comes to zoning decisions, I am committed to a transparent and accountable model of democracy. I have already proposed a method by which neighborhood meetings would be held to gather community input and inform local zoning that meets our needs as neighborhoods, as a city, and as part of this regional housing shortage problem. Central to this will be extensive participatory neighborhood planning meetings that will be used to educate residents about the impacts of proposed zoning and the benefits we seek to achieve in concrete terms that relate to their lived experiences.</p>

              <p>I will advocate for the positions I feel are most productive, but ultimately will use the feedback from these meetings to guide my vote on each proposed zoning change. In Somerville’s Ward Two, many of our residents are already highly educated in the fields of urban planning, transportation design, and architecture, and the lived experiences of neighborhood residents are important inputs that should be valued as highly as the city’s paid staff and consultants.</p></blockquote>
            </li>

            <li class="ward3"><strong>Ben Ewen-Campen (Ward 3):</strong>
              <blockquote><p>In Ward 3, nearly all developments currently planned have context-dependent considerations, but I will always look for ways to: encourage the creation of workforce housing, create meaningful numbers of family-sized units and disability-accessible units, minimize new cars and parking spaces, reduce segregation (based on e.g. race, age, economic class), and push for environmentally-responsible neighborhoods that are safe and enjoyable for residents of all backgrounds and ages.</p></blockquote>
            </li>

            <li class="ward4"><strong>Omar Boukili (Ward 4):</strong>
              <blockquote><p>I want to make sure that we add supply but not just any kind. Here are some of the aspects I would want to prioritize:</p>
                <ol class="default">
                  <li>Maximization of affordable AND middle-income units.</li>
                  <li>Transit-oriented. On-site parking is a significant construction cost driver. Incentivize building living space in exchange for less parking. We need to prioritize humans not cars.</li>
                  <li>Energy efficiency and green building: incentivize both practices. Both can stem cost increases for renters and home owners, especially folks who are on lower earning side.</li>
                </ol>
              </blockquote>
            </li>

            <li class="ward4"><strong>Jesse Clingan (Ward 4):</strong>
              <blockquote><p>How will this development impact the neighborhood? Will the community benefit from this development? Will this development or zoning change help keep more families in Somerville?</p></blockquote>
            </li>

            <li class="ward5"><strong>Mark Niedergang (Ward 5):</strong>
              <blockquote><p>Affordable housing is my #1 consideration when it comes to housing. I grew up in a big apartment building in Manhattan, New York City, so I am comfortable with and supportive of more density in the appropriate locations, such as in the City’s transformational areas and around coming GLX stations. But I also believe we need to protect our already dense residential neighborhoods and not fill every lot with the biggest house that will fit there, which is what too often happens now under our current zoning code. That is why we need a zoning overhaul as the Mayor is proposing, but we have to get it right. Overdevelopment in our existing residential neighborhoods is harming the quality of life in our neighborhoods now, and we can’t shoehorn enough housing into our already densely-settled neighborhoods to make a difference anyway. All these developments in our neighborhoods do is make money for developers and allow wealthy people to move into luxury condos in Somerville.</p></blockquote>
            </li>

            <li class="ward7"><strong>Katjana Ballantyne (Ward 7):</strong>
              <blockquote><p>Important considerations for evaluating a project proposal is does is support SomerVisions, meet the needs of the neighborhood.</p></blockquote>
            </li>

            <li class="atlarge"><strong>John “Jack” Connolly (At-Large):</strong>
              <blockquote><p>I support Major update of Zoning regulations to allow permitting of accessory additions to existing residential structures that will not require time-consuming Planning & Zoning Board relief.</p>

              <p>Increasing the density around the proposed Green Line T stops through update of the Zoning regulations.</p>

              <p>Proximity to, and increased density near public transportation is crucial to Planning & Zoning updates.</p></blockquote>
            </li>

            <li class="atlarge"><strong>Stephanie Hirsch (At-Large):</strong>
              <blockquote><p>Also, please see <a href="http://www.stephanieforsomerville.com/blog">http://www.stephanieforsomerville.com/blog</a></p></blockquote>
            </li>

            <li class="atlarge"><strong>Will Mbah (At-Large):</strong>
              <blockquote><p>I propose handling development differently than the city has thus far in places like Union Square. We must start by asking the community what its needs and concerns are BEFORE making promises to developers. We need a community benefits agreement- that has a large cash sum put forth by the developer for the community to control BEFORE development starts. I think a democratically elected community board should work with the city and control how this money is spent. That way it can be put forth toward green space projects, community centers and funds to help displaced local businesses that are facing higher rents. There are plenty of developers, including non-profits that are willing to be good community partners and we need to seek them out.</p></blockquote>
            </li>

            <li class="atlarge"><strong>Mary Jo Rossetti (At-Large):</strong>
              <blockquote><p>In some regards, a Nexus Study may assist us. As an example, Somerville was FIRST in the Commonwealth to increase the requirement of Inclusionary Housing to 20%. Other communities are now following. Was it high enough? I would support discussion of consideration of a higher percentage.</p></blockquote>
            </li>

            <li class="atlarge"><strong>Dennis Sullivan (At-Large):</strong>
              <blockquote><p>Public input is very important to me when dealing with new zoning.</p></blockquote>
            </li>

            <li class="atlarge"><strong>Bill White (At-Large):</strong>
              <blockquote><p>Again, the area of the proposed development always plays a large role in the considerations that I apply. I would look at the height, density and parking requirements of a development in the middle of a residential neighborhood of one and two family homes much differently than a similar proposal at Assembly, Boynton Yards or the Inner Belt. If a development impacts a residential neighborhood, shadow studies would be a very important consideration with regard to the height of the proposed development or zoning change. Open and green space also would be a very important consideration. If the development is very large, I always believe that thought should be given to consolidating the open and green space requirements to create a park or other large green space. Also, compliance with LEED standards is important. Probably the greatest consideration I have is the feelings of the residents with regard to a proposed development or zoning change that impacts their neighborhood. I am a firm proponent that the residents of a neighborhood should play a large role whenever a development or zoning change is under consideration that will impact that neighborhood and quality of life.</p></blockquote>
            </li>
          </ul>
        </li>
      </ul>
    </section>
<?php require_once "../../includes/footer.php";
