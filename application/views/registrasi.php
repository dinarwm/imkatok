
<section id="content-container" class="clearfix">
<div id="main-wrap" class="clearfix">
<div class="column-clear">&nbsp;</div>
<h3 style="text-align: center;">Registrasi</h3>
<div class="column-clear">&nbsp;</div>
<div class="tt-contentbox">
<div class="tt-contentbox-title tt-cb-title-cool-blue"><span>Cek kehamilan Anda sekarang! Daftarkan diri Anda</span></div>
<div class="tt-contentbox-content tt-content-style-teal-2">
	<p>Pastikan kesehatan janin Anda di sini</p>
	<form action="<?php echo base_url();?>auth/registrasi" method="post"runat="server">
		<table>
		<tr> 
			<td><label> Nama lengkap </label></td>
			<td><input type="text" name="nama" id="nama" required/></td>
		</tr>
		<tr> 
			<td><label> E-mail</label></td>
			<td><input type="text" name="email" id="email" required/></td>
		</tr>
		<tr> 
			<td><label> Password </label></td>
			<td><input type="password" name="password" id="password" required/></td>
		</tr>
		<tr> 
			<td><label> Konfirmasi Password </label></td>
			<td><input type="password" name="password2" id="password2" required match[password]/></td>
		</tr>
		<tr> 
			<td><label> Alamat </label></td>
			<td><input type="text" name="alamat" id="alamat" required/></td>
		</tr>
		<tr> 
			<td><label> Umur Kehamilan </label></td>
			<td><input type="number" name="umur" id="umur" required/> Bulan</td>
		</tr>
		<tr> 
			<td></td>
			<td><input id="btn" type="submit" class="large blue tt-button" value="Kirim"></td>
		</tr>

		</table>
	</form>
</div>
</div>
<div class="column-clear">&nbsp;</div>
<div class="column-clear">&nbsp;</div>
<!-- end #main-wrap -->

</section><!-- END content-container -->

