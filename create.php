<div id="create_wrapper">
   <form action = "perf_register.php" method="POST">
   <div class="create_title">버스킹 개설하기</div>
      <div class="get_image">이미지를 등록해주세요</div>
      <div class="band_name"><input type="text" name = "perf_name" placeholder="팀 이름"></div>
      <div class="location"><input type="radio" name="perf_location" value="seoul">서울<input type="radio" name="location" value="busan">부산<input type="radio" name="location" value="jeju">제주<input type="radio" name="location" value="daejeon">대전<input type="radio" name="location" value="gwangju">광주<input type="radio" name="location" value="etc">기타</div>
      <div class="time"	>시간 : <input type = "date" name = "perf_time"></div>
      <div class="coment"><textarea rows = "8" cols = "40"name = "perf_comment" placeholder="한마디"></textarea>></div>
      <div class="site"><input type="text" name = "perf_name" placeholder="개인 홈페이지"></div>
      <div class="submit"><input type = "submit" value = "입력완료"></div>
   </form>
</div>