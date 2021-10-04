
@extends('base')

@section('content')


<div class="container"> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
             <a class="nav-link box text-white" href="/logs">Logs</a>
          </li>
        <li class="nav-item">
          <a class="nav-link box text-white" href="/logout">Logout</a>
        </li>
      </ul>
    </div>
</nav>
<br>
    <h1>Why it makes good business sense to hire people with disabilities? </h1>
        <br>
        <br>
        Managers sometimes assume that hiring employees who live with disabilities will be more expensive. They worry that these employees will perform at a lower level, be absent more often, need expensive accommodations and will then quit. <br>
        But should managers worry about these things? <br>
        We present a way for managers to evaluate both the net costs and benefits of having employees with disabilities, and we consider all these factors. When we tested our method at one company, we found that it actually saved money by hiring people with disabilities.
    <br>
        To calculate the net value of employing people with disabilities, companies can run what is known as a utility analysis that takes into account direct costs associated with wages, benefits, training and accommodation. It also considers indirect costs such as turnover and absences.

<br><br>
        Direct costs are easily tabulated, but indirect costs are based on industry estimates.
        For example, turnover costs can be estimated as one to 2.5 times the annual salary of the worker who leaves, depending on how lengthy the search is for a replacement and how much on-boarding is required. These costs are balanced against the value provided by the employees, taking into account employee performance evaluations and pay rates.

        <br><br>
        <img src="{{ URL::to('/picture/dashboard.jpg') }}">

</div>





@endsection

<style>
    *{
  background-color: lightpink;
  background-size: cover;

}


</style>
