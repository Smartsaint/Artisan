@extends('layouts.system')

@section('body')
<div class="container">
    <h2>Site Settings</h2>
    <div class="page-inner">
        <form action="/submit-settings" class="col-9" method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="siteName" class="form-label">Site Name</label>
                    <input type="text" class="form-control" id="siteName" name="site_name" required>
                </div>
                <div class="col-md-6">
                    <label for="siteTitle" class="form-label">Site Title</label>
                    <input type="text" class="form-control" id="siteTitle" name="site_title" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="siteTagline" class="form-label">Site Tagline</label>
                <input type="text" class="form-control" id="siteTagline" name="site_tagline" required>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="businessPhone1" class="form-label">Business Phone 1</label>
                    <input type="tel" class="form-control" id="businessPhone1" name="business_phone_1" required>
                </div>
                <div class="col-md-6">
                    <label for="businessPhone2" class="form-label">Business Phone 2</label>
                    <input type="tel" class="form-control" id="businessPhone2" name="business_phone_2">
                </div>
            </div>
            <div class="mb-3">
                <label for="businessEmail" class="form-label">Business Email</label>
                <input type="email" class="form-control" id="businessEmail" name="business_email" required>
            </div>
            <div class="mb-3">
                <label for="businessFacebook" class="form-label">Business Facebook Account</label>
                <input type="url" class="form-control" id="businessFacebook" name="business_facebook">
            </div>
            <div class="mb-3">
                <label for="businessLinkedIn" class="form-label">Business LinkedIn Account</label>
                <input type="url" class="form-control" id="businessLinkedIn" name="business_linkedin">
            </div>
            <div class="mb-3">
                <label for="businessTwitter" class="form-label">Business Twitter Account</label>
                <input type="url" class="form-control" id="businessTwitter" name="business_twitter">
            </div>
            <div class="mb-3">
                <label for="businessAddress1" class="form-label">Business Address 1</label>
                <input type="text" class="form-control" id="businessAddress1" name="business_address_1" required>
            </div>
            <div class="mb-3">
                <label for="businessAddress2" class="form-label">Business Address 2</label>
                <input type="text" class="form-control" id="businessAddress2" name="business_address_2">
            </div>
            <div class="mb-3">
                <label for="businessAddress3" class="form-label">Business Address 3</label>
                <input type="text" class="form-control" id="businessAddress3" name="business_address_3">
            </div>
            <div class="mb-3">
                <label for="businessLogoWhite" class="form-label">Business Logo (White)</label>
                <input type="file" class="form-control" id="businessLogoWhite" name="business_logo_white" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="businessLogoColored" class="form-label">Business Logo (Colored)</label>
                <input type="file" class="form-control" id="businessLogoColored" name="business_logo_colored" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection 