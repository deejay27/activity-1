@extends('layout.app')

@section('content')

    <div id="header">
      	<div class="header-top">
      		<div class="wrapper">
	          	<ul class="top-links">
	           		<li><a href="#">KU-TECH</a></li>
	           		<li class="type2"><a href="#">KURN</a></li>
	           	</ul>
	           	<!-- Login before 
	           	<div class="right-links">
	           		<a href="#">로그인</a>
	           		<a href="#">회원가입</a>
	           	</div>
	           	-->
	           	<!-- Login after user
	           	<div class="right-links">
	           		<a href="#" class="btn-mypage">마이 페이지</a>
	           		<a href="#" id="userid">jesangko <em>님</em></a>
	           		<div class="user-info">
	           			<div class="user-info-top">
	           				<span class="status">USER</span>
	           				<span>고제상</span>
	           				<span>교수</span>
	           			</div>
	           			<span class="txt">생명과학과</span>
	           			<div class="btn-box">
	           				<a href="#" class="btn-logout">로그아웃</a>
	           				<a href="#" class="userinfo-close">&nbsp;</a>
	           			</div>
	           		</div>
	           	</div>
	           	 -->
	           	<!-- Login after admin -->
	           	<div class="right-links">
	           		<a href="#" class="btn-mypage">마이 페이지</a>
	           		<a href="#" id="userid">kolee23 <em>님</em></a>
	           		
	           	</div>
	           	<div class="user-info">
           			<div class="user-info-top">
           				<span class="status">ADMIN</span>
           				<span>이기옥</span>
           				<span>주임</span>
           			</div>
	           		<span class="txt">기술사업부(겸 :고려대학교기술지주주
식회사)</span>
           			<div class="btn-box">
           				<a href="#" class="btn-logout">로그아웃</a>
           				<a href="#" class="userinfo-close">&nbsp;</a>
           			</div>
           		</div>
	      	</div>
        </div>
        <div class="header-bottom">
        	<div class="wrapper">
        		<a href="#" id="btn-menu-list">&nbsp;</a>
        		<h1 class="logo"><a href="#">&nbsp;</a></h1>
        		<div id="main-menu-container">
        			<div class="mmenu-top">
        				<div class="mm-top">
        					<ul>
        						<li>KU-TECH PLATFORM</li>
        						<li>MAIN MENU</li>
        					</ul>
        				</div>
        				<div class="mm-bottom">
        					<span class="title">전체메뉴</span>
        					<a href="#" id="mobile-menu-close">&nbsp;</a>
        					<!-- admin -->
        					<a href="#" class="btn-admin">&nbsp;</a>
        				</div>
        			</div>
	        		<ul id="main-menu">
	        			<li>
	        				<a href="#">KU-TECH 플랫폼 소개</a>
	        				<ul class="submenu sub1">
	        					<li><a href="#">인사말</a></li>
	        					<li><a href="#">비전</a></li>
	        					<li class="withsub">
	        						<a href="#">조직소개</a>
	        						<ul class="depth2">
	        							<li><a href="#">기술이전조직</a></li>
	        							<li><a href="#">기술사업화조직</a></li>
	        						</ul>
	        					</li>
	        					<li><a href="#">유관 사이트</a></li>
	        				</ul>
	        			</li>
	        			<li>
	        				<a href="#">지원 프로그램</a>
	        				<ul class="submenu">
	        					<li class="withsub">
	        						<a href="#">기술이전 관련</a>
	        						<ul class="depth2">
	        							<li><a href="#">기술이전절차</a></li>
	        							<li><a href="#">기술료 산정</a></li>
	        							<li><a href="#">사후관리</a></li>
	        							<li><a href="#">소액특허매입</a></li>
	        						</ul>
	        					</li>
	        					<li class="withsub">
	        						<a href="#">기술사업화 관련</a>
	        						<ul class="depth2">
	        							<li><a href="#">실증화 검증 프로그램</a></li>
	        							<li><a href="#">수요기술문의</a></li>
	        							<li><a href="#">기보/신보 보증프로그램 연계</a></li>
	        							<li><a href="#">정부 R&amp;BD사업 연계</a></li>
	        						</ul>
	        					</li>
	        				</ul>
	        			</li>
	        			<li>
	        				<a href="#">이전기술 검색</a>
	        				<ul class="submenu">
	        					<li><a href="#">유망기술(동영상)</a></li>
	        					<li><a href="#">우수기술(SMK)</a></li>
	        					<li><a href="#">이전기술 상세검색</a></li>
	        				</ul>
	        			</li>
	        			<li>
	        				<a href="#">연구자/연구성과 검색</a>
	        				<ul class="submenu">
	        					<li><a href="#">연구자</a></li>
	        					<li><a href="#">연구과제</a></li>
	        					<li><a href="#">논문</a></li>
	        				</ul>
	        			</li>
	        			<li>
	        				<a href="#">커뮤니티</a>
	        				<ul class="submenu">
	        					<li><a href="#">공지사항</a></li>
	        					<li><a href="#">R&amp;BD 사업안내</a></li>
	        					<li><a href="#">기술이전설명회 안내</a></li>
	        					<li><a href="#">상담신청</a></li>
	        					<li><a href="#">자주하는질문</a></li>
	        					<li><a href="#">뉴스레터</a></li>
	        					<li class="withsub">
	        						<a href="#">자료실</a>
	        						<ul class="depth2">
	        							<li><a href="#">규정/양식</a></li>
	        							<li><a href="#">기타자료</a></li>
	        						</ul>
	        					</li>
	        				</ul>
	        			</li>
	        			<li class="mobile">
	        				<a href="#">마이 페이지</a>
	        				<ul class="submenu">
	        					<li class="withsub">
	        						<a href="#">나의 신청/상담 현황</a>
	        						<ul class="depth2">
	        							<li><a href="#">이전기술 신청 현황</a></li>
	        							<li><a href="#">애로기술 신청 현황</a></li>
	        							<li><a href="#">소액특허매입 신청 현황</a></li>
	        							<li><a href="#">기술이전설명회 신청 현황</a></li>
	        							<li><a href="#">상담신청 현황</a></li>
	        						</ul>
	        					</li>
	        					<li class="withsub">
	        						<a href="#">협력기업/기관 등록 요청</a>
	        						<ul class="depth2">
	        							<li><a href="#">신규 기업/기관 등록</a></li>
	        							<li><a href="#">기업/기관 담당자 등록</a></li>
	        						</ul>
	        					</li>
	        					<li class="withsub">
	        						<a href="#">스크랩 정보</a>
	        						<ul class="depth2">
	        							<li><a href="#">이전기술</a></li>
	        							<li><a href="#">연구자/연구성과</a></li>
	        							<li><a href="#">커뮤니티</a></li>
	        						</ul>
	        					</li>
	        					<li class="withsub">
	        						<a href="#">회원정보(교외사용자)</a>
	        						<ul class="depth2">
	        							<li><a href="#">나의정보관리</a></li>
	        							<li><a href="#">회원탈퇴</a></li>
	        						</ul>
	        					</li>
	        				</ul>
	        			</li>
	        			<li class="mobile">
	        				<a href="#">인덱스 페이지</a>
	        				<ul class="submenu">
	        					<li><a href="#">로그인</a></li>
	        					<li><a href="#">교외사용자 회원가입</a></li>
	        					<li><a href="#">개인정보처리방침</a></li>
	        					<li><a href="#">이메일무단수집거부</a></li>
	        					<li><a href="#">이용약관</a></li>
	        				</ul>
	        			</li>
	        		</ul>
	        	</div>
        		<div class="btns">
        			<a href="#" id="btn-search">&nbsp;</a>
        			<a href="#" id="btn-fullmenu">&nbsp;</a>
        		</div>
        	</div>
        	<div class="submenu-content">
        		<div class="wrapper">
        			<div class="left-content menu1 show">
        				<div class="detail-box">
        					<span class="txt1">KU-TECH 플랫폼<br/>소개</span>
        					<span class="txt2">ABOUT KU-TECH PLATFORM</span>
        				</div>
        			</div>
        			<div class="left-content menu2">
        				<div class="detail-box">
        					<span class="txt1">지원 프로그램</span>
        					<span class="txt2">SUPPORT PROGRAMMS</span>
        				</div>
        			</div>
        			<div class="left-content menu3">
        				<div class="detail-box">
        					<span class="txt1">이전기술 검색</span>
        					<span class="txt2">SEARCH OF Transfer technology</span>
        				</div>
        			</div>
        			<div class="left-content menu4">
        				<div class="detail-box">
        					<span class="txt1">연구자/연구성과<br/>검색</span>
        					<span class="txt2">SEARCH OF researcher &amp; result</span>
        				</div>
        			</div>
        			<div class="left-content menu5">
        				<div class="detail-box">
        					<span class="txt1">연구자커뮤니티</span>
        					<span class="txt2">COMMUNITY</span>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div id="fullmenu" class="fullmenu">
        		<div class="wrapper">
        			<ul class="fmenu-row">
        				<li>
        					<a href="#">KU-TECH 플랫폼 소개</a>
	        				<ul class="depth2">
	        					<li><a href="#">인사말</a></li>
	        					<li><a href="#">비전</a></li>
	        					<li class="withsub">
	        						<a href="#">조직소개</a>
	        						<ul class="depth3">
	        							<li><a href="#">기술이전조직</a></li>
	        							<li><a href="#">기술사업화조직</a></li>
	        						</ul>
	        					</li>
	        					<li><a href="#">유관 사이트</a></li>
	        				</ul>
	        			</li>
	        			<li>
	        				<a href="#">지원 프로그램</a>
	        				<ul class="depth2">
	        					<li class="withsub">
	        						<a href="#">기술이전 관련</a>
	        						<ul class="depth3">
	        							<li><a href="#">기술이전절차</a></li>
	        							<li><a href="#">기술료 산정</a></li>
	        							<li><a href="#">사후관리</a></li>
	        							<li><a href="#">소액특허매입</a></li>
	        						</ul>
	        					</li>
	        					<li class="withsub">
	        						<a href="#">기술사업화 관련</a>
	        						<ul class="depth3">
	        							<li><a href="#">실증화 검증 프로그램</a></li>
	        							<li><a href="#">수요기술문의</a></li>
	        							<li><a href="#">기보/신보 보증프로그램 연계</a></li>
	        							<li><a href="#">정부 R&amp;BD사업 연계</a></li>
	        						</ul>
	        					</li>
	        				</ul>
	        			</li>
	        			<li>
	        				<a href="#">이전기술 검색</a>
	        				<ul class="depth2">
	        					<li><a href="#">유망기술(동영상)</a></li>
	        					<li><a href="#">우수기술(SMK)</a></li>
	        					<li><a href="#">이전기술 상세검색</a></li>
	        				</ul>
	        			</li>
	        			<li>
	        				<a href="#">연구자/연구성과 검색</a>
	        				<ul class="depth2">
	        					<li><a href="#">연구자</a></li>
	        					<li><a href="#">연구과제</a></li>
	        					<li><a href="#">논문</a></li>
	        				</ul>
	        			</li>
        			</ul>
        			<ul class="fmenu-row">
        				<li>
        					<a href="#">커뮤니티</a>
        					<ul class="depth2">
        						<li><a href="#">공지사항</a></li>
        						<li><a href="#">R&amp;BD 사업안내</a></li>
        						<li><a href="#">기술이전설명회 안내</a></li>
        						<li><a href="#">상담신청</a></li>
        						<li><a href="#">자주하는 질문</a></li>
        						<li><a href="#">뉴스레터</a></li>
        						<li class="withsub">
        							<a href="#">자료실</a>
        							<ul class="depth3">
        								<li><a href="#">규정/양식</a></li>
        								<li><a href="#">기타자료</a></li>
        							</ul>
        						</li>
        					</ul>
        				</li>
        				<li>
        					<a href="#">마이 페이지</a>
        					<ul class="depth2">
        						<li class="withsub">
        							<a href="#">나의 신청/상담 현황</a>
        							<ul class="depth3">
        								<li><a href="#">이전기술 신청 현황</a></li>
        								<li><a href="#">수요기술문의 현황</a></li>
        								<li><a href="#">소액특허매입 신청 현황</a></li>
        								<li><a href="#">기술이전설명회 신청 현황</a></li>
        								<li><a href="#">상담신청 현황</a></li>
        							</ul>
        						</li>
        						<li class="withsub">
        							<a href="#">협력기업/기관 등록 요청</a>
        							<ul class="depth3">
        								<li><a href="#">신규 기업/기관 등록</a></li>
        								<li><a href="#">기업/기관 담당자 등록</a></li>
        							</ul>
        						</li>
        						<li class="withsub">
        							<a href="#">스크랩 정보</a>
        							<ul class="depth3">
        								<li><a href="#">이전기술</a></li>	
        								<li><a href="#">연구자/연구성과</a></li>
        								<li><a href="#">커뮤니티</a></li>
        							</ul>
        						</li>
        						<li class="withsub">
        							<a href="#">회원정보(교외사용자)</a>
        							<ul class="depth3">
        								<li><a href="#">나의정보관리</a></li>
        								<li><a href="#">회원탈퇴</a></li>
        							</ul>
        						</li>
        					</ul>
        				</li>
        				<li>
        					<a href="#">인덱스 페이지</a>
        					<ul class="depth2">
        						<li><a href="#">로그인</a></li>
        						<li><a href="#">교외사용자 회원가입</a></li>
        						<li><a href="#">비회원 사용자 이용동의</a></li>
        						<li><a href="#">개인정보처리방침</a></li>
        						<li><a href="#">이메일무단수집거부</a></li>
        						<li><a href="#">이용약관</a></li>
        					</ul>
        				</li>
        			</ul>
        			<div class="btn-box">
        				<a href="#" id="fullmenu-close">전체메뉴 닫기</a>
        			</div>
        		</div>
        	</div>
        </div>
	</div>
	<!-- //header -->
	<!-- contents -->
	<div id="contents">
		<div class="wrapper">
			<div class="section section-top">
				<div class="catch-phrase">
					<span class="txt1">고려대학교 산학협력 기업지원 서비스</span>
					<h2>KU-TECH 플랫폼</h2>
					<h3>KOREA UNIVERSITY TECH PLATFORM</h3>
					<span class="txt2">Korea University Research &amp; Business Foundation / Leaders<br/>
in INdustry-University Cooperation</span>
				</div>
				<div class="notice">
					<div class="notice-top">
						<ul class="notice-tab">
							<li class="on"><a href="#">공지사항</a></li>
							<li><a href="#">R&amp;BD 사업안내</a></li>
						</ul>
					</div>
					<div class="notice-content">
						<div class="notice-box show">
							<div class="notice-nav">
								<a href="#" class="n-prev" id="notice-prev">&nbsp;</a>
								<a href="#" class="n-next" id="notice-next">&nbsp;</a>
								<a href="#" class="n-more">&nbsp;</a>
							</div>
							<div class="notice-box-content" id="notice-group">
								<div class="notice-item">
									<ul>
										<li>
											<a href="#" class="new">2019년도 한국연구재단 인문사회분야 비전임 교원 사업신청 시 주의사항 안내 </a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">2019년 정부 R&amp;D사업 부처 합동설명회 자료 안내 </a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">국가연구개발사업/학술지원사업 연구비 관리 매뉴얼 공지</a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">연구원 참여율 조회 메뉴 신설안내 </a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">2019년도 기초연구실지원사업 간접비 계산 양식 </a>
											<span class="date">2000.00.00</span>
										</li>
									</ul>
								</div>
								<div class="notice-item">
									<ul>
										<li>
											<a href="#">2019-2차 퇴직자 특허 등록보상금 및 실시보상금 지급 안내</a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">연구원 일부 특허 포트폴리오 계약 관련 수요조사</a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">세계전파통신회의(WRC-19) 전략적 대응을 위한 관련 산학연 의견수렴 안내</a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">2019년 IT어린이기자단 및 대학생기자단 모집 안내 </a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">5G 서비스 아이디어 공모전</a>
											<span class="date">2000.00.00</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="notice-box">
							<div class="notice-nav">
								<a href="#" class="n-prev" id="rbd-prev">&nbsp;</a>
								<a href="#" class="n-next" id="rbd-next">&nbsp;</a>
								<a href="#" class="n-more">&nbsp;</a>
							</div>
							<div class="notice-box-content" id="rbd-group">
								<div class="notice-item">
									<ul>
										<li>
											<a href="#" class="new">스마트 안전축사 확산을 위한 기술 및 서비스 수용적합성 연구</a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">2019년도 선박평형수처리설비 핵심기자재 국산화 기술 개발사업 참여기관 모집 재공고</a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">2019년도 산학연 collabo r&amp;d 사업 시행계획 공고</a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">2019년도 산학연 collabo r&amp;d 사업 시행계획 공고</a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">데이터 중심 자율 네트워킹을 위한 계층적 분산학습 방법 연구</a>
											<span class="date">2000.00.00</span>
										</li>
									</ul>
								</div>
								<div class="notice-item">
									<ul>
										<li>
											<a href="#">2019년도 레이저 가공기술 고도화 지원사업 기업기술지원 과제 2차 공고</a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">플렌옵틱 콘텐츠 기반 3차원 메쉬구조 및 텍스쳐 생성 연구</a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">연구개발특구 지정·입주관련 규제정비 정책연구용역</a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">2019년 창의 감성 디바이스 성과조사 용역</a>
											<span class="date">2000.00.00</span>
										</li>
										<li>
											<a href="#">비정형 공간위치를 가지는 다수개의 카메라에 대한 플렌옵틱</a>
											<span class="date">2000.00.00</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section">
				<div class="section-box box-orange">
					<span class="section-title">이전기술 검색</span>
					<ul class="list-box">
						<li><a href="#">유망기술(동영상)</a></li>
						<li><a href="#">우수기술(SMK)</a></li>
						<li><a href="#">기술검색</a></li>
					</ul>
				</div>
				<div class="section-box box-yellow">
					<span class="section-title">연구자/연구성과 검색</span>
					<ul class="list-box">
						<li><a href="#">연구자</a></li>
						<li><a href="#">연구과제</a></li>
						<li><a href="#">논문</a></li>
					</ul>
				</div>
				<div class="section-box box-red">
					<span class="section-title">수요기술/소액특허</span>
					<ul class="img-list">
						<li>
							<a href="#">
								<span class="icon">&nbsp;</span>
								<span class="txt">수요기술 <br/>문의</span>
							</a>
						</li>
						<li class="type1">
							<a href="#">
								<span class="icon">&nbsp;</span>
								<span class="txt">소액특허매입 <br/>신청</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- login before -->
				<div class="section-box box-brown">
					<div class="brown-content">
						<div class="brown-item">
							<span class="section-title">교외사용자 회원가입</span>
							<p class="par">고려대학교 포털(kupid) 아이디를
		이용 할 수 없는 사용자는 직접 회
		원가입을 하시어 ku-TECH 플랫폼
		을 이용하시기 바랍니다.</p>
							<a href="#" class="btn-signup">회원가입</a>
						</div>
						<div class="brown-item">
							<span class="section-title">비회원 이용동의</span>
							<p class="par">회원가입을 원하지 않는 사용자는
비회원 이용동의를 통해 제한적으
로 KU-TECH 플랫폼 서비스를 이
용하실 수 있습니다.</p>
							<a href="#" class="btn-signup">이용동의</a>
						</div>
					</div>
				</div>
				
				 <!-- login after 
				 <div class="section-box box-brown">
					<div class="brown-content">
						<div class="brown-item">
							<span class="section-title">나의 신청/상담 현황</span>
							<ul class="list-box">
								<li><a href="#">기술이전신청</a></li>
								<li><a href="#">기술문의</a></li>
								<li><a href="#">수요기술문의</a></li>
							</ul>
						</div>
						<div class="brown-item">
							<span class="section-title">나의 신청/상담 현황</span>
							<ul class="list-box">
								<li><a href="#">소액특허매입</a></li>
								<li><a href="#">기술이전설명회</a></li>
								<li><a href="#">상담신청</a></li>
							</ul>
						</div>
					</div>
				</div>
				-->
				 <!-- 협력기업/기관 등록
				 <div class="section-box box-brown">
					<span class="section-title">협력기업/기관 등록 요청</span>
					<ul class="img-list brown-list">
						<li class="type2">
							<a href="#">
								<span class="icon">&nbsp;</span>
								<span class="txt">신규 기업/기관 등록</span>
							</a>
						</li>
						<li class="type3">
							<a href="#">
								<span class="icon">&nbsp;</span>
								<span class="txt">기업/기관 담당자 등록</span>
							</a>
						</li>
					</ul>
				</div>
				 -->
				 <!-- 협력기업/기관 등록 
				 <div class="section-box box-brown">
					<span class="section-title">나의 신청/상담 현황</span>
					<ul class="community-list">
						<li><a href="#"><span>수요기술<br/>문의</span></a></li>
						<li><a href="#"><span>소액특허<br/>매입</span></a></li>
						<li><a href="#"><span>기술이전<br/>설명회</span></a></li>
						<li><a href="#"><span>상담신청</span></a></li>
					</ul>
				</div>
				-->
			</div>
			<div class="section">
				<div class="section-media">
					<div class="section-media-top">
						<span class="title">미디어 포커스</span>
						<span class="play-pause">
							<a href="#" class="media-play">&nbsp;</a>
							<a href="#" class="media-pause show">&nbsp;</a>
						</span>
						<span class="media-nav">
						</span>
					</div>
					<div class="section-media-content" id="media-slider">
						<div class="media-item">
							<a href="#" class="img-holder"><img src="../images/stm/front/layout/img_thumb_01.jpg" alt="" /></a>
							<div class="media-detail">
								<a href="#" class="link">고려대학교 산학협력단 연구비 관리체계평가 3회 연 속 A등급 획득</a>
								<span class="date">2000.00.00</span>
								<span class="sns-btns">
									<a href="#" class="icon-fb">&nbsp;</a>
									<a href="#" class="icon-twitter">&nbsp;</a>
									<a href="#" class="icon-url">&nbsp;</a>
								</span>
							</div>
						</div>
						<div class="media-item">
							<a href="#" class="img-holder">&nbsp;</a>
							<div class="media-detail">
								<a href="#" class="link">도파민기작 시냅틱활동 모사한 저전력으로 학습가속 화 뇌-모방 전자소자 개발</a>
								<span class="date">2000.00.00</span>
								<span class="sns-btns">
									<a href="#" class="icon-fb">&nbsp;</a>
									<a href="#" class="icon-twitter">&nbsp;</a>
									<a href="#" class="icon-url">&nbsp;</a>
								</span>
							</div>
						</div>
						<div class="media-item">
							<a href="#" class="img-holder"><img src="../images/stm/front/layout/img_thumb_02.jpg" alt="" /></a>
							<div class="media-detail">
								<a href="#" class="link">윤효재 교수팀, 새로운 분자단위 열전 측정 시스템 구축연구 나노레터스게재</a>
								<span class="date">2000.00.00</span>
								<span class="sns-btns">
									<a href="#" class="icon-fb">&nbsp;</a>
									<a href="#" class="icon-twitter">&nbsp;</a>
									<a href="#" class="icon-url">&nbsp;</a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="section-box box-gray">
					<div class="tech-top">
						<span class="section-title">기술이전설명회</span>
						<span class="tech-nav">
							<a href="#" class="tech-prev">&nbsp;</a>
							<a href="#" class="tech-next">&nbsp;</a>
							<a href="#" class="tech-more">&nbsp;</a>
						</span>
					</div>
					<div class="tech-content" id="tech-slider">
						<div class="tech-item">
							<a href="#" class="link">2019년도 이공분야 기초연구
사업(과기정통부) 권역별 설명 회 개최 안내</a>
							<span class="texts">
								<span class="date">2000.00.00</span>
								<span class="time">13:30 ~ 15:00</span>
							</span>
							<span class="btn-box"><a href="#" class="btn">상세정보</a></span>
						</div>
						<div class="tech-item">
							<a href="#" class="link">2019년 재난안전 RD사업 현
장대응부처 합동설명회 안내 </a>
							<span class="texts">
								<span class="date">2000.00.00</span>
								<span class="time">14:00 ~ 16:00</span>
							</span>
							<span class="btn-box"><a href="#" class="btn">상세정보</a></span>
						</div>
						<div class="tech-item">
							<a href="#" class="link">2018년도 한국연구재단 글로
벌박사양성사업(GPF) 교내 사 업설명회 </a>
							<span class="texts">
								<span class="date">2000.00.00</span>
								<span class="time">14:00 ~ 16:00</span>
							</span>
							<span class="btn-box"><a href="#" class="btn">상세정보</a></span>
						</div>
					</div>
				</div>
				<div class="section-box box-dgray">
					<span class="section-title">커뮤니티</span>
					<ul class="community-list">
						<li><a href="#"><span>상담신청</span></a></li>
						<li><a href="#"><span>자주하는 질문</span></a></li>
						<li><a href="#"><span>뉴스레터</span></a></li>
						<li><a href="#"><span>자료실</span></a></li>
					</ul>
				</div>
			</div>
			<div class="section">
				<div class="section-status">
					<div class="status-item">
						<span class="icon icon-01">&nbsp;</span>
						<span class="figure">12,500</span>
						<span class="txt">보유기술(건)</span>
					</div>
					<div class="status-item">
						<span class="icon icon-02">&nbsp;</span>
						<span class="figure">10,000</span>
						<span class="txt">연구자(명)</span>
					</div>
					<div class="status-item">
						<span class="icon icon-03">&nbsp;</span>
						<span class="figure">4,050</span>
						<span class="txt">연구과제(건)</span>
					</div>
					<div class="status-item">
						<span class="icon icon-04">&nbsp;</span>
						<span class="figure">15,500</span>
						<span class="txt">논문(건)</span>
					</div>
					<div class="status-item">
						<span class="icon icon-05">&nbsp;</span>
						<span class="figure">10,000</span>
						<span class="txt">누적 기술료(억원)</span>
					</div>
					<div class="status-item">
						<span class="icon icon-06">&nbsp;]</span>
						<span class="figure">1,000</span>
						<span class="txt">협력기업/기관(개)</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //contents -->
	<!-- footer -->
	<div id="footer">
		<div class="footer-top">
			<div class="wrapper">
				<ul class="footer-menu">
					<li><a href="#">개인정보처리방침</a></li>
					<li><a href="#">이메일무단수집거부</a></li>
					<li><a href="#">이용약관</a></li>
					<li><a href="#">조직소개</a></li>
				</ul>
				<div class="sns-links">
					<a href="#" class="btn-fb">&nbsp;</a>
					<a href="#" class="btn-youtube">&nbsp;</a>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="wrapper">
				<a href="#" class="footer-logo"><img src="../images/stm/front/layout/footer_logo.png" alt="Korea University" /></a>
				<span class="copyright">02841 서울특별시 성북구 안암로 145 고려대학교 산학협력단<br/>COPYRIGHTS(C) 2019 KOREA UNIVERSITY. ALL RIGHTS RESERVED.</span>
				<div class="family-site">
					<a href="#" id="btn-family-site" class="btn-family-site">관련사이트 바로가기</a>
					<ul>
						<li><a href="#">고려대학교</a></li>
						<li><a href="#">KURMS(연구포털)</a></li>
						<li><a href="#">KURN(연구네트워크)</a></li>
						<li><a href="#">KUPID</a></li>
						<li><a href="#">의료원</a></li>
					</ul>
				</div>
				<a href="#" id="btn-go-top">&nbsp;</a>
			</div>
		</div>
	</div>
@endsection 