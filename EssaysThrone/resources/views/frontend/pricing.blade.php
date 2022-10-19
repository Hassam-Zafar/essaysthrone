@extends('frontend.layouts.app')

@section('title')
   WritersGeek | Pricing
@endsection

@section('description')
{{ (isset($pages) && isset($pages->meta_description)) ? $pages->meta_description : "Pricing" }}
@endsection

@section('tags')
{{  (isset($pages) && isset($pages->tags)) ? json_decode($pages->tags) : "Pricing" }}
@endsection

@section('page_main_heading')
WritersGeek Price Plan
@endsection


@section('content')
<style>
  p.textstyle {
    margin: 5%;
}
</style>
<section class=" container col-lg-12 d-flex align-items-center">
    <div class="textpricing">
      <p class="textstyle ">We have various schemes and packages according to the tasks and rates. Our rates are
        reasonable and pocket-friendly. Packages of low rates have limited
        tasks and high rates have unlimited tasks. But, keep in mind that you will get what you have paid for. We do not
        compromise on the quality of the work. We
        assure you of quality content. You can order your work at low rates and high rates. If your grades don’t matter
        enough and you just need your essay to be
        done, then you can order your essay at cheap rates. But, if A-Grade matters to you a lot then you can order
        professional work at higher rates.
        <br>
        The professional writing we provide is very difficult and time-consuming and our experts have to make time for
        completing your work. The professional
        essays, thesis, case study, assignment, business plan, research proposal, or research paper we provide demand
        high-level and compositional skills. It needsdedication and motivation to write and we charge the amount as per
        the nature of the task. We will provide you with writing you can stand behind.
        <br>
        The professional writing we provide is difficult and time-consuming. It demands high-level compositional skills
        and a dedication to providing you with writing
        you can stand behind.
        <br><br>
        We promise to deliver you the best possible academic writing for your project!
        <br><br>
        Three factors influence our pricing on your project:
      </p>
    </div>
  </section>

  <section class="table d-flex align-items-center">
    <div class="container  align-items-center" data-aos="zoom-out" data-aos-delay="100">
      <table class="pricingtable">
        <thead>
          <tr>
            <th>
              <h1>Urgency</h1>
            </th>
            <th>
              <h1>High School</h1>
            </th>
            <th>
              <h1>College</h1>
            </th>
            <th>
              <h1>Graduate</h1>
            </th>
            <th>
              <h1>Master</h1>
            </th>
            <th>
              <h1>Ph.D.</h1>
            </th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td>30 days</td>
            <td>$7.5</td>
            <td>$8.5</td>
            <td>$9.5</td>
            <td>$11.25</td>
            <td>$12.25</td>
          </tr>
          <tr>
            <td>20 days</td>
            <td>$7.75</td>
            <td>$8.75</td>
            <td>$10.25</td>
            <td>$11.75</td>
            <td>$12.75</td>
          </tr>
          <tr>
            <td>15 days</td>
            <td>$8</td>
            <td>$10</td>
            <td>$11</td>
            <td>$13</td>
            <td>$14</td>
          </tr>
          <tr>
            <td>10 days</td>
            <td>$8.5</td>
            <td>$10.5</td>
            <td>$11.5</td>
            <td>$13.5</td>
            <td>$14.5</td>
          </tr>
          <tr>
            <td>7 days</td>
            <td>$10.25</td>
            <td>$11.5</td>
            <td>$12.25</td>
            <td>$14.25</td>
            <td>$15.25</td>
          </tr>
          <tr>
            <td>5 days</td>
            <td>$11.25</td>
            <td>$12.25</td>
            <td>$13.25</td>
            <td>$15.25</td>
            <td>$16.25</td>
          </tr>
          <tr>
            <td>4 days</td>
            <td>$12.25</td>
            <td>$13.5</td>
            <td>$14.5</td>
            <td>$16.75</td>
            <td>$17.75</td>
          </tr>
          <tr>
            <td>3 days</td>
            <td>$14.25</td>
            <td>$14.75</td>
            <td>$15.5</td>
            <td>$17.75</td>
            <td>$18.75</td>
          </tr>
          <tr>
            <td>48 Hours</td>
            <td>$15.5</td>
            <td>$16.25</td>
            <td>$17.25</td>
            <td>$19.5</td>
            <td>$21.5</td>
          </tr>
          <tr>
            <td>24 Hours</td>
            <td>$17.5</td>
            <td>$19.5</td>
            <td>$20.5</td>
            <td>$22.75</td>
            <td>$24.5</td>
          </tr>
          <tr>
            <td>12 Hours</td>
            <td>$19.5</td>
            <td>$21.5</td>
            <td>$22.5</td>
            <td>$24.75</td>
            <td>$26.5</td>
          </tr>
          <tr>
            <td>6 Hours</td>
            <td>4623</td>
            <td>3486</td>
            <td>00:31:52</td>
            <td>6369</td>
            <td>01:32:50</td>
          </tr>
          <tr>
            <td>3 Hours</td>
            <td>$23.5</td>
            <td>$25.5</td>
            <td>$27.5</td>
            <td>$29.5</td>
            <td>$31.5</td>
          </tr>

        </tbody>
      </table>
    </div>
  </section>


@endsection