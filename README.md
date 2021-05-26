# GroupWorks (BO-WU Museum)
A website that users easier exhibit works to more people.

## Demo
[GroupWorks-BO-WU Museum](https://www.hui779.com/group3/)
### 一般會員帳號
- User : lloyd83238@gmail.com
- Password : 123456
### 高級會員帳號
- User : 123@yahoo.com.tw
- Password : 123456

## Technologies
Front-End Basic  | Layout | Front-End Frameworks | Back-End | Database|Tool for Development         |Other                         |
:---------------:|:------:|:--------------------:|:--------:|:-------:|:---------------------------:|:----------------------------:|
HTML             | RWD    | Vue                  | PHP      | MySQL   |Node Package Manager (NPM)   |Version Control : Git / GitHub|
CSS              | Flexbox| SCSS                 |          |         |                             |Canvas                        |
JavaScript(ES6)  |        |                      |          |         |                             |WebStorage                    |
jQuery           |        |                      |          |         |                             |                              |


## 團體專案負責項目
### 切版(含Wireframe及XD)
登入頁面  | 高級會員展間 | 競標頁面 |
:---------------:|:------:|:--------------------:|
![image](https://github.com/shang-jui/group/blob/master/group-login.gif) | ![image](https://github.com/shang-jui/group/blob/master/group-highmember.gif)| ![image](https://github.com/shang-jui/group/blob/master/group-bidding.gif) |
### 功能
明信片               | 高級會員展間 | 高級會員後台| 會員註冊、登入       | 其他|
:-------------------:|:----------:|:----------:|:-------------------:|:-------------------:|
簡易畫板              | 左右輪播圖  |個人資訊修改  |一般登入             |音樂播放             |
可填文字方塊          | 按讚        |作品上傳、刪除|第三方登入(FB、Google)|                    |
可選背景圖            | 訂閱        |作品資訊修改  |登出                 |                    |
可選圖樣              | 分享        |作品上、下架  |                     |                    |       
可自由拖拉背景及圖樣   |             |             |                    |                     |
下載明信片            |             |             |                    |                     |
明信片email           |             |             |                    |                     |
 
## Webstie Demo
### 明信片--簡易畫板
![image](https://github.com/shang-jui/group/blob/master/group-postcardDraw.gif)
- 使用Canvas製作簡易的畫板
- 可清除、改變顏色及畫筆粗細
### 明信片--製作明信片
![image](https://github.com/shang-jui/group/blob/master/group-postcardDo.gif)
- 建置PHP搭配前端AJAX方法取得資料庫(MySQL)即時資料
- 可選擇背景圖、撰寫內文並使用drop and drag選擇圖樣
- 使用draggable方法圖樣及內文可在明信片內自行移動
- 可刪除或改變內文大小及顏色
### 明信片--下載及寄出
![image](https://github.com/shang-jui/group/blob/master/group-postcarddown.gif)
- 使用html2canvas方法下載圖片
- 建置PHP搭配前端AJAX方法即時寄出Mail
### 高級會員展間
![image](https://github.com/shang-jui/group/blob/master/group-highmember.gif)
- 使用原生JS撰寫左右選擇輪播圖
- 分享功能
- 線上留言板
- 訂閱功能(能即時透過Mail收到作者發佈的新作品)
- 建置PHP搭配AJAX方法
  - 載入作品於資料庫(MySQL)即時資訊(作品內容、按讚人數、是否訂閱、留言板)
  - 即時更新資料庫(MySQL)(按讚人數、是否訂閱、留言資訊)
### 高級會員後台
![image](https://github.com/shang-jui/group/blob/master/group-highmemberback.gif)
- 作品上傳、刪除作品
- 作品自由上、下架(上架會使用email通知有訂閱此作者的人)
- 可修改作品及個人資料
- 建置PHP搭配AJAX方法
  - 載入個人資料及作品於資料庫(MySQL)即時資訊(個人資訊、作品資訊、按讚人數、瀏覽人數、留言數、上架區作品及作品儲存區)
  - 即時更新資料庫(MySQL)(個人資訊、作品資訊、按讚人數、瀏覽人數、留言數、上架區作品及作品儲存區)
### 會員註冊、登入-一般登入
![image](https://github.com/shang-jui/group/blob/master/group-normalLogin.gif)
- 建置PHP實現會員一般註冊及登入
- 使用WebStorage記錄會員資料及登出系統
### 會員註冊、登入-FB登入
![image](https://github.com/shang-jui/group/blob/master/group-FBLogin.gif)
- 串接 FB API 實現第三方登入並搭配PHP實現註冊及登入
- 使用WebStorage記錄會員資料及登出系統
### 會員註冊、登入-Google登入
![image](https://github.com/shang-jui/group/blob/master/group-GoogleLogin.gif)
- 串接 Google API 實現第三方登入並搭配PHP實現註冊及登入
- 使用WebStorage記錄會員資料及登出系統
