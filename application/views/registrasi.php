
<section id="content-container" class="clearfix">
<div id="main-wrap" class="clearfix">
<div class="column-clear">&nbsp;</div>
<h3 style="text-align: center;">Daftar</h3>
<div class="column-clear">&nbsp;</div>
<div class="tt-contentbox">
<div class="tt-contentbox-title tt-cb-title-cool-blue"><span>Cek kehamilan Anda sekarang! Daftarkan diri Anda</span></div>
<div class="tt-contentbox-content tt-content-style-teal-2">
	<p>Pastikan kesehatan janin Anda di sini</p>
	<form action="<?php echo base_url();?>auth/registrasi" method="post"runat="server">
		<table>
		<tr> 
			<td><label> Nama lengkap </label></td>
			<td><input type="text" name="nama" id="nama" required placeholder="Syahara Fatma"/></td>
		</tr>
		<tr> 
			<td><label> E-mail</label></td>
			<td><input type="text" name="email" id="email" required/ placeholder="saya@mail.com"></td>
		</tr>
		<tr> 
			<td><label> Password </label></td>
			<td><input type="password" name="password" id="password" required placeholder="*****"/></td>
		</tr>
		<tr> 
			<td><label> Konfirmasi Password </label></td>
			<td><input type="password" name="password2" id="password2" required match[password] placeholder="*****"/></td>
		</tr>
		<tr> 
			<td><label> Umur Kehamilan </label></td>
			<td><select>
			  <option value="1">1 bulan</option>
			  <option value="2">2 bulan</option>
			  <option value="3">3 bulan</option>
			  <option value="4">4 bulan</option>
			  <option value="5">5 bulan</option>
			  <option value="6">6 bulan</option>
			  <option value="7">7 bulan</option>
			  <option value="8">8 bulan</option>
			  <option value="9">9 bulan</option>
			</select> </td>
		</tr>
		<tr> 
			<td></td>
			<td><input id="btn" type="submit" class="large blue tt-button" value="Daftar" style="margin-left:10px;"></td>
		</tr>

		</table>
	</form>
</div>
</div>
<div class="column-clear">&nbsp;</div>
<div class="column-clear">&nbsp;</div>
<!-- end #main-wrap -->

</section><!-- END content-container -->

