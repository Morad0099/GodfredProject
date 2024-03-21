@extends('layouts.app')

@section('content')

<div class="container" style="display: flex;">
    <div class="image-wrapper" style="margin-right: 20px;">
        <img src="{{asset('project.jpg')}}" alt="logo">
    </div>
    <div class="text-wrapper" style="flex-grow: 1;">
        <h2 class="font-weight-bold" style="color:#083869">ABURI PWCE DEMONSTRATION JHS</h2><br>
        <h3 class="font-weight-bold" style="color:#083869; margin-left:30px">END OF TERM REPORT CARD</h3>
    </div>
</div>

<div class="font-weight-bold" style="display: flex; flex-wrap: wrap;">
    <div style="flex: 0 0 50%;">NAME : <span style="padding-left: 10px;">TEST</span></div>
    <div style="flex: 0 0 50%;">TERM : <span style="padding-left: 10px;">ONE</span></div>
    <div style="flex: 0 0 50%;">BASIC : <span style="padding-left: 10px;">8</span></div>
    <div style="flex: 0 0 50%;">No. on Roll : <span style="padding-left: 10px;">95</span></div>
    <div style="flex: 0 0 50%;">YEAR : <span style="padding-left: 10px;"></span>2023</div>
    <div style="flex: 0 0 50%;">DATE : <span style="padding-left: 10px;"></span>21/12/2023</div>
    <div style="flex: 0 0 50%;">NEXT TERM BEGINS : <span style="padding-left: 10px;">9/1/2023</span></div>
    <div style="flex: 0 0 50%;">OVERALL POSITION: <span style="padding-left: 10px;">25</span></div>
</div>

<div class="table">
    <table class="table table-bordered" style="margin-top: 20px;">
        <thead>
          <tr>
            <th>SUBJECT</th>
            <th>CLASS SCORE (50%)</th>
            <th>EXAM SCORE (50%)</th>
            <th>TOTAL SCORE (100%)</th>
            <th>LEVEL OF PROFICIENCY</th>
            <th>GRADE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ENGLISH LANGUAGE</td>
            <td>37</td>
            <td>13</td>
            <td>50</td>
            <td>4</td>
            <td>DEVELOPING</td>
          </tr>
          <tr>
            <td>MATHEMATICS</td>
            <td>46</td>
            <td>21</td>
            <td>67</td>
            <td>3</td>
            <td>APPROACHING PROFICIENCY</td>
          </tr>
          <tr>
            <td>INTEGRATED SCIENCE</td>
            <td>42</td>
            <td>35</td>
            <td>77</td>
            <td>2</td>
            <td>PROFICIENT</td>
          </tr>
          <tr>
            <td>SOCIAL STUDIES</td>
            <td>48</td>
            <td>39</td>
            <td>87</td>
            <td>1</td>
            <td>HIGHLY PROFICIENT</td>
          </tr>
          <tr>
            <td>CAREER TECHNOLOGY</td>
            <td>42</td>
            <td>35</td>
            <td>77</td>
            <td>2</td>
            <td>PROFICIENT</td>
          </tr>
          <tr>
            <td>CREATIVE ARTS</td>
            <td>42</td>
            <td>36</td>
            <td>78</td>
            <td>2</td>
            <td>PROFICIENT</td>
          </tr>
          <tr>
            <td>GHANAIAN LANGUAGE</td>
            <td>45</td>
            <td>36</td>
            <td>81</td>
            <td>1</td>
            <td>HIGHLY PROFICIENT</td>
          </tr>
          <tr>
            <td>RELIGIOUS & MORAL ED.</td>
            <td>45</td>
            <td>45</td>
            <td>90</td>
            <td>1</td>
            <td>HIGHLY PROFICIENT</td>
          </tr>
          <tr>
            <td>COMPUTING</td>
            <td>41</td>
            <td>35</td>
            <td>76</td>
            <td>2</td>
            <td>PROFICIENT</td>
          </tr>
          <tr>
            <td>FRENCH</td>
            <td>45</td>
            <td>23</td>
            <td>68</td>
            <td>2</td>
            <td>PROFICIENT</td>
          </tr>
        </tbody>
      </table>     
</div>

<div class="font-weight-bold">
    <div style="margin-bottom: 10px;">ATTENDANCE : <span style="padding-left: 10px;">56 OUT OF 56</span></div>
    <div style="margin-bottom: 10px;">RAW SCORE : <span style="padding-left: 10px;">714 OUT OF 1000</span></div>
    <div style="margin-bottom: 10px;">CONDUCT : <span style="padding-left: 10px;"> Very helpful</span></div>
    <div style="margin-bottom: 10px;">INTEREST : <span style="padding-left: 10px;">Shows interest in group work</span></div>
    <div style="margin-bottom: 10px;">ATTITUDE : <span style="padding-left: 10px;">Takes part in all subjects</span></div>
    <div style="margin-bottom: 10px;">CLASS TEACHER'S REMARKS : <span style="padding-left: 10px;">Improving gradually</span></div>
    <div>HEAD TEACHER'S REMARKS : <span style="padding-left: 10px;">Could do better</span></div>
</div>

<div class="image-wrapper" style="margin-left: 30%;">
    <img src="{{asset('signature.jpg')}}" alt="signature">
</div>

@endsection